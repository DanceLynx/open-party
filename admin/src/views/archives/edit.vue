<template>
    <div class="edit-popup">
        <popup ref="popupRef" :title="popupTitle" :async="true" width="550px" @confirm="handleSubmit" @close="handleClose">
            <div class="h-[500px] overflow-y-auto">
                <el-form ref="formRef" :model="formData" label-width="140px" :rules="formRules">

                    <el-form-item label="用户" prop="user_id">
                        <el-select class="flex-1" v-model="formData.user_id" clearable filterable placeholder="请选择用户">
                            <el-option v-for="(item, index) in userOption" :key="index"
                                :label="`${item.account}-${item.nickname}`" :value="parseInt(item.id)" />
                        </el-select>
                    </el-form-item>
                    <el-form-item label="姓名" prop="name">
                        <el-input v-model="formData.name" clearable placeholder="请输入姓名" />
                    </el-form-item>
                    <el-form-item label="性别" prop="gender">
                        <el-radio-group v-model="formData.gender" placeholder="请选择性别">
                            <el-radio v-for="(item, index) in dictData.sex" :key="index" :label="parseInt(item.value)">
                                {{ item.name }}
                            </el-radio>
                        </el-radio-group>
                    </el-form-item>
                    <el-form-item label="身份证" prop="idcard">
                        <el-input v-model="formData.idcard" clearable placeholder="请输入身份证" />
                    </el-form-item>
                    <el-form-item label="出生日期" prop="birthday_time">
                        <el-date-picker class="flex-1 !flex" v-model="formData.birthday_time" clearable type="date"
                            value-format="YYYY-MM-DD" placeholder="选择出生日期">
                        </el-date-picker>
                    </el-form-item>

                    <el-form-item label="民族" prop="nation">
                        <el-input v-model="formData.nation" clearable placeholder="请输入民族" />
                    </el-form-item>
                    <el-form-item label="籍贯" prop="native_place">
                        <el-input v-model="formData.native_place" clearable placeholder="请输入籍贯" />
                    </el-form-item>
                    <el-form-item label="地址" prop="address">
                        <el-input v-model="formData.address" clearable placeholder="请输入地址" />
                    </el-form-item>
                    <el-form-item label="学历" prop="education">
                        <el-input v-model="formData.education" clearable placeholder="请输入学历" />
                    </el-form-item>
                    <el-form-item label="毕业院校" prop="college">
                        <el-input v-model="formData.college" clearable placeholder="请输入毕业院校" />
                    </el-form-item>
                    <el-form-item label="党籍状态" prop="archives_status">
                        <el-select class="flex-1" v-model="formData.archives_status" clearable placeholder="请选择党籍状态">
                            <el-option v-for="(item, index) in dictData.archives_status" :key="index" :label="item.name"
                                :value="parseInt(item.value)" />
                        </el-select>
                    </el-form-item>
                    <el-form-item label="党支部" prop="department">
                        <el-select class="flex-1" v-model="formData.department" clearable placeholder="请选择党支部">
                            <el-option v-for="(item, index) in dictData.department" :key="index" :label="item.name"
                                :value="parseInt(item.value)" />
                        </el-select>
                    </el-form-item>
                    <el-form-item label="联系电话" prop="contact">
                        <el-input v-model="formData.contact" clearable placeholder="请输入联系电话" />
                    </el-form-item>
                    <el-form-item label="是否为流动党员" prop="is_flow">
                        <el-radio-group v-model="formData.is_flow" placeholder="请选择是否为流动党员">
                            <el-radio :label="0"> 否</el-radio>
                            <el-radio :label="1">是</el-radio>
                        </el-radio-group>
                    </el-form-item>
                    <el-form-item label="婚姻状态" prop="is_merry">
                        <el-radio-group v-model="formData.is_merry" placeholder="请选择婚姻状态">
                            <el-radio v-for="(item, index) in dictData.merry_status" :key="index"
                                :label="parseInt(item.value)">
                                {{ item.name }}
                            </el-radio>
                        </el-radio-group>
                    </el-form-item>
                    <el-form-item label="加入党组织时间" prop="join_time">
                        <el-date-picker class="flex-1 !flex" v-model="formData.join_time" clearable type="date"
                            value-format="YYYY-MM-DD" placeholder="选择加入党组织时间">
                        </el-date-picker>
                    </el-form-item>

                    <el-form-item label="成为正式党员时间" prop="real_time">
                        <el-date-picker class="flex-1 !flex" v-model="formData.real_time" clearable type="date"
                            value-format="YYYY-MM-DD" placeholder="选择成为正式党员时间">
                        </el-date-picker>
                    </el-form-item>

                    <el-form-item label="主要经历" prop="see">
                        <el-input v-model="formData.see" clearable placeholder="请输入主要经历" type="textarea" rows="4" />
                    </el-form-item>
                    <el-form-item label="发展党员情况" prop="situation">
                        <el-input v-model="formData.situation" clearable placeholder="请输入发展党员情况" type="textarea" rows="4" />
                    </el-form-item>
                </el-form>
            </div>
        </popup>
    </div>
</template>

<script lang="ts" setup name="archivesEdit">
import type { FormInstance } from 'element-plus'
import Popup from '@/components/popup/index.vue'
import { apiArchivesAdd, apiArchivesEdit, apiArchivesDetail } from '@/api/archives'
import { getUserOptions } from "@/api/user"
import { timeFormat } from '@/utils/util'
import type { PropType } from 'vue'
defineProps({
    dictData: {
        type: Object as PropType<Record<string, any[]>>,
        default: () => ({})
    }
})
const emit = defineEmits(['success', 'close'])
const userOption = ref<any[]>([])
const formRef = shallowRef<FormInstance>()
const popupRef = shallowRef<InstanceType<typeof Popup>>()
const mode = ref('add')


// 弹窗标题
const popupTitle = computed(() => {
    return mode.value == 'edit' ? '编辑档案表' : '新增档案表'
})

// 表单数据
const formData = reactive({
    id: '',
    name: '',
    user_id: '',
    idcard: '',
    gender: '',
    birthday_time: '',
    nation: '',
    native_place: '',
    address: '',
    education: '',
    college: '',
    archives_status: '',
    department: '',
    contact: '',
    is_flow: '',
    is_merry: '',
    join_time: '',
    real_time: '',
    see: '',
    situation: '',
})


// 表单验证
const formRules = reactive<any>({
    user_id: [{
        required: true,
        message: '请选择用户',
        trigger: ['blur']
    }],
    name: [{
        required: true,
        message: '请输入姓名',
        trigger: ['blur']
    }],
    idcard: [{
        required: true,
        message: '请输入身份证',
        trigger: ['blur']
    }],
    gender: [{
        required: true,
        message: '请选择性别',
        trigger: ['blur']
    }],
    birthday_time: [{
        required: true,
        message: '请选择出生日期',
        trigger: ['blur']
    }],
    nation: [{
        required: true,
        message: '请输入民族',
        trigger: ['blur']
    }],
    native_place: [{
        required: true,
        message: '请输入籍贯',
        trigger: ['blur']
    }],
    address: [{
        required: true,
        message: '请输入地址',
        trigger: ['blur']
    }],
    education: [{
        required: true,
        message: '请输入学历',
        trigger: ['blur']
    }],
    college: [{
        required: true,
        message: '请输入毕业院校',
        trigger: ['blur']
    }],
    archives_status: [{
        required: true,
        message: '请选择党籍状态',
        trigger: ['blur']
    }],
    department: [{
        required: true,
        message: '请输入党支部',
        trigger: ['blur']
    }],
    contact: [{
        required: true,
        message: '请输入联系电话',
        trigger: ['blur']
    }],
    is_flow: [{
        required: true,
        message: '请选择是否为流动党员',
        trigger: ['blur']
    }],
    is_merry: [{
        required: true,
        message: '请选择婚姻状态',
        trigger: ['blur']
    }],
    join_time: [{
        required: true,
        message: '请选择加入党组织时间',
        trigger: ['blur']
    }],
    real_time: [{
        required: true,
        message: '请选择成为正式党员时间',
        trigger: ['blur']
    }],
    see: [{
        required: true,
        message: '请输入主要经历',
        trigger: ['blur']
    }],
    situation: [{
        required: true,
        message: '请输入发展党员情况',
        trigger: ['blur']
    }]
})


// 获取详情
const setFormData = async (data: Record<any, any>) => {
    userOption.value = await getUserOptions()
    for (const key in formData) {
        if (data[key] != null && data[key] != undefined) {
            //@ts-ignore
            formData[key] = data[key]
        }
    }

    //@ts-ignore
    formData.birthday_time = timeFormat(formData.birthday_time, 'yyyy-mm-dd')
    //@ts-ignore
    formData.join_time = timeFormat(formData.join_time, 'yyyy-mm-dd')
    //@ts-ignore
    formData.real_time = timeFormat(formData.real_time, 'yyyy-mm-dd')
}

const getDetail = async (row: Record<string, any>) => {
    const data = await apiArchivesDetail({
        id: row.id
    })
    setFormData(data)
}



// 提交按钮
const handleSubmit = async () => {
    await formRef.value?.validate()
    const data = { ...formData, }
    mode.value == 'edit'
        ? await apiArchivesEdit(data)
        : await apiArchivesAdd(data)
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

onMounted(async () => {
})


defineExpose({
    open,
    setFormData,
    getDetail
})
</script>
