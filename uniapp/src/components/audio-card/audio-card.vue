<template>
	<navigator :url="`/packages/pages/audio_detail/audio_detail?cid=${cid}`" class="w-[340rpx] my-1 relative">
		<image :src="item.image" mode="scaleToFill" class="w-[340rpx] h-[270rpx]" />
		<view class="line-clamp-2 text-base">{{item.title}}</view>
		<view class="text-sm text-muted mt-1">{{timeFormat(item.create_time)}}</view>
		<view class="absolute play-icon"><u-icon name="play-circle" size="60rpx" color="#FFFFFF"></u-icon>
		</view>
	</navigator>
</template>

<script lang="ts" setup>
	defineProps({
		cid: {
			type: Number,
			default: 0
		},
		item: {
			type: Object,
			default: {}
		}
	})
	const timeFormat = (date : string) => {
		return uni.$u.timeFormat(date, "yyyy-mm-dd")
	}
</script>

<style lang="scss" scoped>
	.play-icon {
		top: calc(270rpx / 2 - 30rpx);
		right: calc(340rpx / 2 - 30rpx);
	}
</style>