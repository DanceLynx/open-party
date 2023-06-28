<template>
    <div class="edit-popup">
        <popup
            ref="popupRef"
            :title="popupTitle"
            :async="true"
            width="1000px"
            @confirm="handleSubmit"
            @close="handleClose"
        >
            <el-form ref="formRef" :model="formData" label-width="90px" :rules="formRules">
                <el-form-item label="党史分类" prop="cid">
                    <el-select class="flex-1" v-model="formData.cid" clearable placeholder="请选择党史分类">
                        <el-option v-for="(item,index) in optionsData.knowledge_cate" :key="index" :label="item.title" :value="item.id"/>
                    </el-select>
                </el-form-item>
                <el-form-item label="文章标题" prop="title">
                    <el-input v-model="formData.title" clearable placeholder="请输入文章标题" />
                </el-form-item>
                <el-form-item label="简介" prop="desc">
                    <el-input v-model="formData.desc" clearable placeholder="请输入简介" />
                </el-form-item>
                <el-form-item label="文章摘要" prop="abstract">
                    <el-input class="flex-1" v-model="formData.abstract" type="textarea" rows="4" clearable placeholder="请输入文章摘要" />
                </el-form-item>
                <el-form-item label="文章图片" prop="image">
                    <material-picker v-model="formData.image" />
                </el-form-item>
                <el-form-item label="作者" prop="author">
                    <el-input v-model="formData.author" clearable placeholder="请输入作者" />
                </el-form-item>
                <el-form-item label="文章内容" prop="content">
                    <editor class="flex-1" v-model="formData.content" :height="500" />
                </el-form-item>
                <el-form-item label="浏览量" prop="click">
                    <el-input v-model="formData.click" clearable placeholder="请输入浏览量" />
                </el-form-item>
                <el-form-item label="是否显示" prop="is_show">
                    <el-radio-group v-model="formData.is_show" placeholder="请选择是否显示">
                        <el-radio 
                            v-for="(item, index) in dictData.show_status"
                            :key="index"
                            :label="parseInt(item.value)"
                        >
                            {{ item.name }}
                        </el-radio>
                    </el-radio-group>
                </el-form-item>
                <el-form-item label="排序" prop="sort">
                    <el-input v-model="formData.sort" clearable placeholder="请输入排序" />
                </el-form-item>
            </el-form>
        </popup>
    </div>
</template>

<script lang="ts" setup name="knowledgeEdit">
import type { FormInstance } from 'element-plus'
import Popup from '@/components/popup/index.vue'
import { apiKnowledgeAdd, apiKnowledgeEdit, apiKnowledgeDetail } from '@/api/knowledge'
import { timeFormat } from '@/utils/util'
import { useDictOptions } from '@/hooks/useDictOptions'
import {apiKnowledgeCateAll} from "@/api/knowledge_cate"

import type { PropType } from 'vue'
defineProps({
    dictData: {
        type: Object as PropType<Record<string, any[]>>,
        default: () => ({})
    }
})
const emit = defineEmits(['success', 'close'])
const formRef = shallowRef<FormInstance>()
const popupRef = shallowRef<InstanceType<typeof Popup>>()
const mode = ref('add')


// 弹窗标题
const popupTitle = computed(() => {
    return mode.value == 'edit' ? '编辑党史知识' : '新增党史知识'
})

// 表单数据
const formData = reactive({
    id: '',
    cid: '',
    title: '',
    desc: '',
    abstract: '',
    image: '',
    author: '',
    content: '',
    click: 0,
    is_show: 1,
    sort: 0,
})


// 表单验证
const formRules = reactive<any>({
    cid: [{
        required: true,
        message: '请选择党史分类',
        trigger: ['blur']
    }],
    title: [{
        required: true,
        message: '请输入文章标题',
        trigger: ['blur']
    }],
    is_show: [{
        required: true,
        message: '请选择是否显示:1-是.0-否',
        trigger: ['blur']
    }]
})


// 获取详情
const setFormData = async (data: Record<any, any>) => {
    for (const key in formData) {
        if (data[key] != null && data[key] != undefined) {
            //@ts-ignore
            formData[key] = data[key]
        }
    }
    
    
}
const {optionsData} = useDictOptions<{knowledge_cate:any[]}>({
    knowledge_cate:{
        api: apiKnowledgeCateAll
    }
})

const getDetail = async (row: Record<string, any>) => {
    const data = await apiKnowledgeDetail({
        id: row.id
    })
    setFormData(data)
}


// 提交按钮
const handleSubmit = async () => {
    await formRef.value?.validate()
    const data = { ...formData,  }
    mode.value == 'edit' 
        ? await apiKnowledgeEdit(data) 
        : await apiKnowledgeAdd(data)
    popupRef.value?.close()
    emit('success')
}

//打开弹窗
const open = (type = 'add') => {
    mode.value = type
    popupRef.value?.open()
}

// 关闭回调
const handleClose = () => {
    emit('close')
}



defineExpose({
    open,
    setFormData,
    getDetail
})
</script>
