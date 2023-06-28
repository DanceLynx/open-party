<template>
	<view class="news">
		<!-- 搜索 -->
		<navigator class="news-search px-[24rpx] py-[14rpx] bg-white" url="/pages/search/search">
			<u-search placeholder="请输入关键词搜索" disabled :show-action="false"></u-search>
		</navigator>

		<view class="article">
			<view class="flex items-center justify-between mx-[20rpx] my-[30rpx] text-2xl font-medium">
				<view class="article-title flex items-center">党史知识</view>
				<navigator url="/packages/pages/knowledge_cate/knowledge_cate" class="inline-block text-base"><text
						class="mr-1">更多</text><u-icon name="arrow-right" size="28rpx"></u-icon></navigator>
			</view>
			<view class="flex flex-wrap justify-between bg-white">
				<knowledge-card v-for="(item,index) in state.knowledge_cate_list" :key="index" :knowledge-id="item.id"
					:item="item"></knowledge-card>
			</view>
		</view>
		<view class="article">
			<view class="flex items-center justify-between  mx-[20rpx] my-[30rpx] text-2xl font-medium">
				<view class="article-title flex items-center">党建参阅</view>
				<navigator url="/packages/pages/news_list/news_list?id=3" class="ml-auto text-base"><text
						class="mr-1">更多</text><u-icon name="arrow-right" size="28rpx"></u-icon></navigator>
			</view>
			<news-card v-for="(item,index) in state.article_list" :key="index" :news-id="item.id"
				:item="item"></news-card>
		</view>

		<tabbar />
	</view>
</template>

<script lang="ts" setup>
	import { ref, reactive, computed } from 'vue'
	import { onLoad, onShow, onReady } from '@dcloudio/uni-app'
	import { getAllData } from '@/api/news'
	import knowledgeCard from "@/components/knowledge_card/knowledge_card.vue"
	const state = reactive<{
		knowledge_cate_list : any[],
		article_list : any[],
		audio_cate_list : any[]
	}>({
		knowledge_cate_list: [],
		article_list: [],
		audio_cate_list: []
	})
	const handleClickMore = () => {

	}

	onLoad(async (options) => {
		// 获取页面数据
		const response = await getAllData()
		// 党史知识类目
		state.knowledge_cate_list = response.knowledge_cate_list
		// 党建参阅文章列表 限制4条
		state.article_list = response.article_list
		// 有声读物类目
		state.audio_cate_list = response.audio_cate_list
	})
</script>

<style lang="scss">
	.news {
		&-search {
			margin-bottom: 2rpx;
		}

		&-list {
			height: calc(100vh - 272rpx - env(safe-area-inset-bottom));
		}
	}

	.article-title {
		&::before {
			content: '';
			width: 8rpx;
			height: 34rpx;
			display: block;
			margin-right: 10rpx;
			background: $u-type-primary;
		}
	}

	.line-clamp-2 {
		overflow: hidden;
		text-overflow: ellipsis;
		-webkit-line-clamp: 2;
		display: -webkit-box;
		-webkit-box-orient: vertical;
	}

	.border-bottom {
		border: 1px solid #f8f8f8f8;
	}

	.play-icon {
		top: calc(270rpx / 2 - 30rpx);
		right: calc(340rpx / 2 - 30rpx);
	}
</style>