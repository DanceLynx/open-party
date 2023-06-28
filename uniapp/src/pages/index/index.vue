<template>
	<view class="index">
		<u-navbar :is-back="false" title="首页">

		</u-navbar>
		<view v-for="(item, index) in state.pages" :key="index">
			<template v-if="item.name == 'search'">
				<w-search :content="item.content" :styles="item.styles" />
			</template>
			<template v-if="item.name == 'banner'">
				<w-banner :content="item.content" :styles="item.styles" />
			</template>
			<template v-if="item.name == 'nav'">
				<w-nav :content="item.content" :styles="item.styles" />
			</template>
			<template v-if="item.name == 'notice'">
				<w-notice :content="item.content" :style="item.styles" :items="state.notice" />
			</template>
		</view>

		<view class="article" v-if="state.article.length">
			<view class="flex items-center article-title mx-[20rpx] my-[30rpx] text-2xl font-medium">
				<view>推荐文章</view>

			</view>
			<news-card v-for="item in state.article" :key="item.id" :news-id="item.id" :item="item" />
		</view>
		<tabbar />
	</view>
</template>

<script setup lang="ts">
	import { getIndex } from '@/api/shop'
	import { reactive } from 'vue'
	const state = reactive<{
		pages : any[]
		article : any[],
		notice : any[]
	}>({
		pages: [],
		article: [],
		notice: [{ text: "工作提示 我认了" }, { text: "hello 000000000000000000000000000000 world 1" }, { text: "hello world 2" }]
	})
	const getData = async () => {
		const data = await getIndex()
		state.pages = JSON.parse(data?.page?.data)
		state.article = data.article
	}


	const toArticleMore = () => {
		// 点击更多
		console.log("确实点击了更多...")
	}

	getData()
</script>

<style lang="scss">
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
</style>