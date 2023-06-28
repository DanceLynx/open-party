<template>
	<view class="news-detail bg-white">
		<!-- 标题信心 -->
		<view class="news-detail-header py-[20rpx] px-[30rpx]">
			<view class="text-3xl font-medium">{{ knowledgeData.title }}</view>
			<view class="flex mt-[20rpx] text-xs">
				<view class="mr-[40rpx]" v-if="knowledgeData.author">作者: {{ knowledgeData.author }}</view>
				<view class="text-muted mr-[40rpx] flex-1">{{ knowledgeData.create_time }}</view>
				<view class="flex items-center text-muted flex-none">
					<image src="/static/images/icon/icon_visit.png" class="w-[30rpx] h-[30rpx]"></image>
					<view class="ml-[10rpx]">{{ knowledgeData.click }}</view>
				</view>
			</view>
		</view>

		<!-- 咨询内容 -->
		<view class="news-detail-section bg-white p-[24rpx]">
			<!-- 摘要 -->
			<view class="summary p-[20rpx] text-base" v-if="knowledgeData.abstract">
				<text class="font-medium">摘要: </text> {{ knowledgeData.abstract }}
			</view>
			<!-- 内容 -->
			<view class="mt-[20rpx]">
				<u-parse :html="knowledgeData.content"></u-parse>
			</view>
		</view>
	</view>
</template>

<script lang="ts" setup>
	import { ref } from 'vue'
	import { onLoad } from '@dcloudio/uni-app'
	import { getKnowledgeDetail } from '@/api/knowledge'

	const knowledgeData = ref<any>({})
	let knowledgeId = ''

	const getData = async (id : any) => {
		knowledgeData.value = await getKnowledgeDetail({ id })
	}



	onLoad((options : any) => {
		knowledgeId = options.id
		getData(knowledgeId)
	})
</script>

<style lang="scss">
	.news-detail {
		height: 100%;

		&-header {
			border-bottom: 2rpx solid #f8f8f8;
		}

		&-section {
			.summary {
				border-radius: 12rpx;
				background-color: #f7f7f7;
			}
		}

		.panel-btn {
			position: fixed;
			right: 30rpx;
			height: 80rpx;
			bottom: 80rpx;
			border-radius: 40rpx;
			background: rgba(255, 255, 255, 0.95);
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.16);
		}
	}
</style>