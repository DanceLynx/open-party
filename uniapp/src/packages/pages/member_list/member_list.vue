<template>
	<view class="px-[20rpx] bg-white">
		<view v-for="(item,index) in state.lists" :key="index" class="flex item items-center py-[20rpx]"
			hover-class="u-hover-class" @click="handleClickItem(item,index)">
			<image :src="item.avatar" mode="scaleToFill" class="w-[200rpx] h-[260rpx] shrink"></image>
			<view class="flex-1 ml-[20rpx] h-[260rpx] py-[10rpx] flex flex-col justify-between">
				<view class="text-xl font-bold">{{item.name}}</view>
				<view>{{item.level_name}} | {{item.department_name}}</view>
				<view class="desc text-sm text-muted">{{item.desc}}</view>
			</view>
		</view>
	</view>
	<u-loadmore :status="state.more" v-if="state.lists.length>state.page_size "></u-loadmore>
	<u-empty v-if="state.lists.length<=0" mode="list"></u-empty>
	<tabbar />
</template>

<script lang="ts" setup>
	import { onLoad, onReachBottom, onPullDownRefresh } from "@dcloudio/uni-app"
	import { ref, reactive, provide } from "vue"
	import { getMemberList } from "@/api/member"
	const state = reactive<{ lists : Array, page_no : number, page_size : number, more : string, extend : Array }>({
		lists: [],
		page_no: 1,
		page_size: 15,
		more: "loadmore",
		extend: []
	})
	// 获取数据列表
	const getLists = async () => {
		state.more = "loading"
		let response = await getMemberList({
			page_no: state.page_no,
			page_size: state.page_size
		})
		state.extend = response.extend
		console.log(state.extend)
		state.lists = state.lists?.concat(response.lists)?.map((item : any) => {
			// 解析党内职务
			let levels = state.extend.levels.filter((i : any) => i.value == item.level)
			if (levels.length > 0) {
				item.level_name = levels[0].name
			} else {
				item.level_name = "未知"
			}
			// 党支部
			let departments = state.extend.departments.filter((i : any) => i.value == item.department)
			if (departments.length > 0) {
				item.department_name = departments[0].name
			} else {
				item.department_name = "未知"
			}
			return item
		})
		// 判断是否有更多
		if (response.lists < state.page_size) {
			state.more = "nomore"
		} else {
			state.more = "loadmore"
		}
	}
	// 下一页
	const nextPage = async () => {
		if (state.more == "nomore") return
		state.page_no += 1
		await getLists()
	}
	const reloadPage = async () => {
		// 数据初始化
		state.page_no = 1
		state.more = "loadmore"
		state.lists = []
		await getLists()
	}
	// 点击某个项
	const handleClickItem = (item : any, index : number) => {
		// 给子页面提供数据
		let item_str : string = encodeURIComponent(JSON.stringify(item))
		uni.navigateTo({
			url: "/packages/pages/member_detail/member_detail?item=" + item_str
		})
	}
	onLoad(async (options : any) => {
		await getLists()
	})
	// 下拉刷新
	onPullDownRefresh(async () => {
		await reloadPage()
		uni.stopPullDownRefresh()
	})
	// 上拉加载
	onReachBottom(async () => {
		await nextPage()
	})
</script>

<style lang="scss" scoped>
	.item {
		.desc {
			overflow: hidden;
			text-overflow: ellipsis;
			-webkit-line-clamp: 3;
			display: -webkit-box;
			-webkit-box-orient: vertical;
		}
	}
</style>