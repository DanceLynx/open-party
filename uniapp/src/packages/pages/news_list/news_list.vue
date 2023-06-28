<template>
	<view>
		<news-card v-for="(item,index) in state.lists" :key="index" :news-id="item.id" :item="item"></news-card>
	</view>
	<u-loadmore :status="state.more" v-if="state.lists.length>state.page_size "></u-loadmore>
	<u-empty v-if="state.lists.length<=0" mode="list"></u-empty>
</template>

<script lang="ts" setup>
	import { onLoad, onReachBottom, onPullDownRefresh } from "@dcloudio/uni-app"
	import { ref, reactive } from "vue"
	import { getArticleList } from "@/api/news"
	// 类目id初始化
	const cateId = ref(0)
	const state = reactive<{ lists : Array, page_no : number, page_size : number, more : string }>({
		lists: [],
		page_no: 1,
		page_size: 15,
		more: "loadmore"
	})
	// 获取数据列表
	const getLists = async () => {
		state.more = "loading"
		let response = await getArticleList({
			cid: cateId.value,
			page_no: state.page_no,
			page_size: state.page_size
		})
		state.lists = state.lists?.concat(response.lists)
		// 判断是否有更多
		if (response.lists < state.page_size) {
			state.more = "nomore"
		} else {
			state.more = "loadmore"
		}
	}
	//时间格式化
	const timeFormat = (date : string) => {
		return uni.$u.timeFormat(date, "yyyy-mm-dd")
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
	onLoad(async (options : any) => {
		cateId.value = options.id
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
	.border-bottom {
		border: 1px solid #f8f8f8f8;
	}
</style>