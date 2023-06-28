<template>
	<navigator :url="`/pages/news_detail/news_detail?id=${newsId}`"
		class="px-[20rpx] py-[20rpx] bg-white flex items-center border-bottom">
		<view class="flex-1">
			<view class="truncate text-lg">{{item.title}}</view>
			<view class="text-sm text-muted mt-1">{{timeFormat(item.create_time)}}</view>
		</view>
		<u-icon size="26rpx" name="arrow-right"></u-icon>
	</navigator>
</template>

<script lang="ts" setup>
	const props = defineProps({
		newsId: {
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
	.border-bottom {
		border: 1px solid #f8f8f8f8;
	}
</style>