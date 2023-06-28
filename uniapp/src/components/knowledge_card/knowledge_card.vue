<template>
	<view class="px-[20rpx] bg-white flex flex-wrap justify-between">
		<navigator :url="`/packages/pages/knowledge/knowledge?id=${knowledgeId}`" class="w-[330rpx] my-1">
			<image :src="item.image" mode="scaleToFill" class="w-[330rpx] h-[260rpx]" />
			<view class="line-clamp-2 text-base">{{item.title}}</view>
			<view class="text-sm text-muted mt-1">{{timeFormat(item.create_time)}}</view>
		</navigator>
	</view>
</template>

<script lang="ts" setup>
	const props = defineProps({
		knowledgeId: {
			type: Number
		},
		item: {
			type: Object
		}
	})
	const timeFormat = (date : string) => {
		return uni.$u.timeFormat(date, "yyyy-mm-dd")
	}
</script>

<style lang="scss" scoped>
	.line-clamp-2 {
		overflow: hidden;
		text-overflow: ellipsis;
		-webkit-line-clamp: 2;
		display: -webkit-box;
		-webkit-box-orient: vertical;
	}
</style>