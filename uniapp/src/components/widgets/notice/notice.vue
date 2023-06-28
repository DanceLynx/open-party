<template>
	<view class="px-[20rpx] bg-white my-1 py-2 flex flex-row items-center" v-if="content.enabled">
		<image :src="getImageUrl(content.icon)" mode="widthFix" class="w-[180rpx]"></image>
		<swiper class="h-[35rpx] flex-1 ml-3" :autoplay="true" :interval="3000" :vertical="true" :duration="1000">
			<swiper-item v-for="(item,index) of content.data" :key="index">
				<view class="swiper-item truncate text-lg">{{item.text}}</view>
			</swiper-item>
		</swiper>
	</view>
</template>

<script lang="ts" setup>
	import { useAppStore } from '@/stores/app'
	const props = defineProps({
		content: {
			type: Object,
			default: () => ({})
		},
		styles: {
			type: Object,
			default: () => ({})
		},
		items: {
			type: Array,
			default: []
		}

	})
	const { getImageUrl } = useAppStore()
</script>

<style>
</style>