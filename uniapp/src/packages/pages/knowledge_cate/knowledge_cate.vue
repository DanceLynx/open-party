<template>
	<view class="flex flex-row flex-wrap bg-white justify-between">
		<knowledge-card v-for="(item,index) in state.lists" :key="index" :knowledge-id="item.id"
			:item="item"></knowledge-card>
	</view>
	<u-loadmore :status="state.more" v-if="state.lists.length>state.page_size "></u-loadmore>
	<u-empty v-if="state.lists.length <= 0"></u-empty>
</template>

<script lang="ts" setup>
	import { onLoad, onReachBottom, onPullDownRefresh } from "@dcloudio/uni-app"
	import { reactive } from "vue"
	import { getKnowledgeCateList } from "@/api/knowledge"
	import knowledgeCard from "@/components/knowledge_card/knowledge_card.vue"
	const state = reactive<{ lists : Array, page_no : number, page_size : number, more : string }>({
		lists: [],
		page_no: 1,
		page_size: 10,
		more: "loadmore"
	})
	// 获取数据列表
	const getLists = async () => {
		state.more = "loading"
		let response = await getKnowledgeCateList({
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

</style>