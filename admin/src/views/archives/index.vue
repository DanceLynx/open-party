<template>
    <div>
        <el-card class="!border-none mb-4" shadow="never">
            <el-form class="mb-[-16px]" :model="queryParams" inline>
                <el-form-item label="姓名" prop="name">
                    <el-input class="w-[280px]" v-model="queryParams.name" clearable placeholder="请输入姓名" />
                </el-form-item>
                <el-form-item label="性别" prop="gender">
                    <el-select class="w-[280px]" v-model="queryParams.gender" clearable placeholder="请选择性别">
                        <el-option label="全部" value=""></el-option>
                        <el-option v-for="(item, index) in dictData.sex" :key="index" :label="item.name"
                            :value="item.value" />
                    </el-select>
                </el-form-item>
                <el-form-item label="出生日期" prop="birthday_time">
                    <daterange-picker v-model:startTime="queryParams.start_time" v-model:endTime="queryParams.end_time" />
                </el-form-item>

                <el-form-item label="民族" prop="nation">
                    <el-input class="w-[280px]" v-model="queryParams.nation" clearable placeholder="请输入民族" />
                </el-form-item>
                <el-form-item label="党籍状态" prop="archives_status">
                    <el-select class="w-[280px]" v-model="queryParams.archives_status" clearable placeholder="请选择党籍状态">
                        <el-option label="全部" value=""></el-option>
                        <el-option v-for="(item, index) in dictData.archives_status" :key="index" :label="item.name"
                            :value="item.value" />
                    </el-select>
                </el-form-item>

                <el-form-item label="联系电话" prop="contact">
                    <el-input class="w-[280px]" v-model="queryParams.contact" clearable placeholder="请输入联系电话" />
                </el-form-item>
                <el-form-item label="是否为流动党员" prop="is_flow">
                    <el-select class="w-[280px]" v-model="queryParams.is_flow" clearable placeholder="请选择是否为流动党员">
                        <el-option label="全部" value=""></el-option>
                        <el-option v-for="(item, index) in dictData.yes_or_no" :key="index" :label="item.name"
                            :value="item.value" />
                    </el-select>
                </el-form-item>
                <el-form-item label="婚姻状态" prop="is_merry">
                    <el-select class="w-[280px]" v-model="queryParams.is_merry" clearable placeholder="请选择婚姻状态">
                        <el-option label="全部" value=""></el-option>
                        <el-option v-for="(item, index) in dictData.merry_status" :key="index" :label="item.name"
                            :value="item.value" />
                    </el-select>
                </el-form-item>

                <el-form-item>
                    <el-button type="primary" @click="resetPage">查询</el-button>
                    <el-button @click="resetParams">重置</el-button>
                </el-form-item>
            </el-form>
        </el-card>
        <el-card class="!border-none" v-loading="pager.loading" shadow="never">
            <el-button v-perms="['archives.archives/add']" type="primary" @click="handleAdd">
                <template #icon>
                    <icon name="el-icon-Plus" />
                </template>
                新增
            </el-button>
            <el-button v-perms="['archives.archives/delete']" :disabled="!selectData.length"
                @click="handleDelete(selectData)">
                删除
            </el-button>
            <div class="mt-4">
                <el-table :data="pager.lists" @selection-change="handleSelectionChange">
                    <el-table-column type="selection" width="55" />
                    <el-table-column label="姓名" prop="name" show-overflow-tooltip />
                    <el-table-column label="身份证" prop="idcard" show-overflow-tooltip />
                    <el-table-column label="性别" prop="gender">
                        <template #default="{ row }">
                            <dict-value :options="dictData.sex" :value="row.gender" />
                        </template>
                    </el-table-column>
                    <el-table-column label="出生日期" prop="birthday_time">
                        <template #default="{ row }">
                            <span>{{ row.birthday_time ? timeFormat(row.birthday_time, 'yyyy-mm-dd') : '' }}</span>
                        </template>
                    </el-table-column>
                    <el-table-column label="民族" prop="nation" show-overflow-tooltip />
                    <el-table-column label="党籍状态" prop="archives_status">
                        <template #default="{ row }">
                            <dict-value :options="dictData.archives_status" :value="row.archives_status" />
                        </template>
                    </el-table-column>
                    <el-table-column label="联系电话" prop="contact" show-overflow-tooltip />
                    <el-table-column label="是否为流动党员" prop="is_flow">
                        <template #default="{ row }">
                            <dict-value :options="dictData.yes_or_no" :value="row.is_flow" />
                        </template>
                    </el-table-column>



                    <el-table-column label="操作" width="120" fixed="right">
                        <template #default="{ row }">
                            <el-button v-perms="['archives.archives/edit']" type="primary" link @click="handleEdit(row)">
                                编辑
                            </el-button>
                            <el-button v-perms="['archives.archives/delete']" type="danger" link
                                @click="handleDelete(row.id)">
                                删除
                            </el-button>
                        </template>
                    </el-table-column>
                </el-table>
            </div>
            <div class="flex mt-4 justify-end">
                <pagination v-model="pager" @change="getLists" />
            </div>
        </el-card>
        <edit-popup v-if="showEdit" ref="editRef" :dict-data="dictData" @success="getLists" @close="showEdit = false" />
    </div>
</template>

<script lang="ts" setup name="archivesLists">
import { usePaging } from '@/hooks/usePaging'
import { useDictData } from '@/hooks/useDictOptions'
import { apiArchivesLists, apiArchivesDelete } from '@/api/archives'
import { timeFormat } from '@/utils/util'
import feedback from '@/utils/feedback'
import EditPopup from './edit.vue'

const editRef = shallowRef<InstanceType<typeof EditPopup>>()
// 是否显示编辑框
const showEdit = ref(false)


// 查询条件
const queryParams = reactive({
    name: '',
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
    situation: ''
})

// 选中数据
const selectData = ref<any[]>([])

// 表格选择后回调事件
const handleSelectionChange = (val: any[]) => {
    selectData.value = val.map(({ id }) => id)
}

// 获取字典数据
const { dictData } = useDictData('sex,archives_status,show_status,merry_status,department,yes_or_no')

// 分页相关
const { pager, getLists, resetParams, resetPage } = usePaging({
    fetchFun: apiArchivesLists,
    params: queryParams
})

// 添加
const handleAdd = async () => {
    showEdit.value = true
    await nextTick()
    editRef.value?.open('add')
}

// 编辑
const handleEdit = async (data: any) => {
    showEdit.value = true
    await nextTick()
    editRef.value?.open('edit')
    editRef.value?.setFormData(data)
}

// 删除
const handleDelete = async (id: number | any[]) => {
    await feedback.confirm('确定要删除？')
    await apiArchivesDelete({ id })
    getLists()
}

getLists()
</script>

