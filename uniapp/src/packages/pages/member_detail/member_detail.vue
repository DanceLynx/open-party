<template>
	<view class="px-[20rpx] bg-white">
		<view class="flex py-[20rpx]">
			<image :src="data.avatar" mode="scaleToFill" class="w-[200rpx] h-[260rpx]"></image>
			<view class="flex-1 ml-[20rpx]">
				<view class="text-xl">{{data.name}}</view>
				<view class="text-muted text-sm pt-[20rpx]">{{data.level_name}} | {{data.department_name}}</view>
			</view>
		</view>
		<view class="py-[40rpx]">
			<view class="text-2xl font-bold">个人简介</view>
			<view class="mt-[20rpx]">
				<u-parse :html="data.desc"></u-parse>
			</view>
		</view>
	</view>
</template>

<script lang="ts" setup>
	import { ref } from "vue"
	import { onLoad } from "@dcloudio/uni-app"
	const data = ref({})
	onLoad((options : any) => {
		data.value = JSON.parse(decodeURIComponent(options.item))
	})
</script>

<style>

</style>