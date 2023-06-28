<template>
    <div class="edit-popup">
        <popup ref="popupRef" :title="popupTitle" :async="true" width="750px" @confirm="handleSubmit" @close="handleClose">
            <el-form ref="formRef" :model="formData" label-width="90px" :rules="formRules">
                <el-form-item label="姓名" prop="name">
                    <el-input v-model="formData.name" clearable placeholder="请输入姓名" />
                </el-form-item>
                <el-form-item label="党员头像(200*260)" prop="avatar">
                    <material-picker v-model="formData.avatar" />
                </el-form-item>
                <el-form-item label="党内职务" prop="level">
                    <el-select class="flex-1" v-model="formData.level" clearable placeholder="请选择党员级别">
                        <el-option v-for="(item, index) in dictData.member_level" :key="index" :label="item.name"
                            :value="parseInt(item.value)" />
                    </el-select>
                </el-form-item>
                <el-form-item label="党支部" prop="department">
                    <el-select class="flex-1" v-model="formData.department" clearable placeholder="请选择党支部">
                        <el-option v-for="(item, index) in dictData.department" :key="index" :label="item.name"
                            :value="parseInt(item.value)" />
                    </el-select>
                </el-form-item>
                <el-form-item label="个人简介" prop="desc">
                    <Editor v-model="formData.desc" height="300" mode="simple" />
                </el-form-item>
                <el-form-item label="是否显示" prop="is_show">
                    <el-radio-group v-model="formData.is_show" placeholder="请选择是否显示">
                        <el-radio v-for="(item, index) in dictData.show_status" :key="index" :label="parseInt(item.value)">
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

<script lang="ts" setup name="memberEdit">
import type { FormInstance } from 'element-plus'
import Popup from '@/components/popup/index.vue'
import { apiMemberAdd, apiMemberEdit, apiMemberDetail } from '@/api/member'
import { timeFormat } from '@/utils/util'
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
    return mode.value == 'edit' ? '编辑党员表' : '新增党员表'
})

// 表单数据
const formData = reactive({
    id: '',
    name: '',
    avatar: '',
    level: '',
    department: '',
    desc: '',
    is_show: 1,
    sort: 0,
})


// 表单验证
const formRules = reactive<any>({
    name: [{
        required: true,
        message: '请输入姓名',
        trigger: ['blur']
    }],
    avatar: [{
        required: true,
        message: '请选择党员头像',
        trigger: ['blur']
    }],
    level: [{
        required: true,
        message: '请选择党内职务',
        trigger: ['blur']
    }],
    department: [{
        required: true,
        message: '请选择党支部',
        trigger: ['blur']
    }],
    is_show: [{
        required: true,
        message: '请选择是否显示',
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

const getDetail = async (row: Record<string, any>) => {
    const data = await apiMemberDetail({
        id: row.id
    })
    setFormData(data)
}


// 提交按钮
const handleSubmit = async () => {
    await formRef.value?.validate()
    const data = { ...formData, }
    mode.value == 'edit'
        ? await apiMemberEdit(data)
        : await apiMemberAdd(data)
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
