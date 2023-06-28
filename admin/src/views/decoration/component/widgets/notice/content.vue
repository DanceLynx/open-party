<template>
    <div class="notice" :style="styles">
        <div class="w-full h-full my-1 p-2 bg-white flex items-center">
            <img :src="getImageUrl(getIcon)" alt="" class="icon">
           <span class="ml-3">正在滚动的文案...</span>
        </div>
    </div>
</template>
<script lang="ts" setup>
import type { PropType } from 'vue'
import type options from './options'
import useAppStore from '@/stores/modules/app'
type OptionsType = ReturnType<typeof options>
const props = defineProps({
    content: {
        type: Object as PropType<OptionsType['content']>,
        default: () => ({})
    },
    styles: {
        type: Object as PropType<OptionsType['styles']>,
        default: () => ({})
    },
    height: {
        type: String,
        default: '170px'
    }
})
const {getImageUrl} = useAppStore()
const getIcon = computed(() => {
    const content = props.content
    return content.icon
})
</script>

<style lang="scss" scoped>
    .icon{
        width: 80px;
        height: 24px;
    }
</style>
