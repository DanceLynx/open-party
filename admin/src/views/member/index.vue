<template>
    <div>
        <el-card class="!border-none mb-4" shadow="never">
            <el-form class="mb-[-16px]" :model="queryParams" inline>
                <el-form-item label="姓名" prop="name">
                    <el-input class="w-[280px]" v-model="queryParams.name" clearable placeholder="请输入姓名" />
                </el-form-item>
                <el-form-item label="党员级别" prop="level">
                    <el-select class="w-[280px]" v-model="queryParams.level" clearable placeholder="请选择党员级别">
                        <el-option label="全部" value=""></el-option>
                        <el-option v-for="(item, index) in dictData.member_level" :key="index" :label="item.name"
                            :value="item.value" />
                    </el-select>
                </el-form-item>
                <el-form-item label="是否显示" prop="is_show">
                    <el-select class="w-[280px]" v-model="queryParams.is_show" clearable placeholder="请选择是否显示">
                        <el-option label="全部" value=""></el-option>
                        <el-option v-for="(item, index) in dictData.show_status" :key="index" :label="item.name"
                            :value="item.value" />
                    </el-select>
                </el-form-item>
                <el-form-item label="排序" prop="sort">
                    <el-input class="w-[280px]" v-model="queryParams.sort" clearable placeholder="请输入排序" />
                </el-form-item>
                <el-form-item>
                    <el-button type="primary" @click="resetPage">查询</el-button>
                    <el-button @click="resetParams">重置</el-button>
                </el-form-item>
            </el-form>
        </el-card>
        <el-card class="!border-none" v-loading="pager.loading" shadow="never">
            <el-button v-perms="['member/add']" type="primary" @click="handleAdd">
                <template #icon>
                    <icon name="el-icon-Plus" />
                </template>
                新增
            </el-button>
            <el-button v-perms="['member/delete']" :disabled="!selectData.length" @click="handleDelete(selectData)">
                删除
            </el-button>
            <div class="mt-4">
                <el-table :data="pager.lists" @selection-change="handleSelectionChange">
                    <el-table-column type="selection" width="55" />
                    <el-table-column label="姓名" prop="name" show-overflow-tooltip />
                    <el-table-column label="党员头像" prop="avatar">
                        <template #default="{ row }">
                            <el-image style="width:50px;height:50px;" :src="row.avatar" />
                        </template>
                    </el-table-column>
                    <el-table-column label="党内职务" prop="level">
                        <template #default="{ row }">
                            <dict-value :options="dictData.member_level" :value="row.level" />
                        </template>
                    </el-table-column>
                    <el-table-column label="党支部" prop="department">
                        <template #default="{ row }">
                            <dict-value :options="dictData.department" :value="row.department" />
                        </template>
                    </el-table-column>
                    <el-table-column label="是否显示" prop="is_show">
                        <template #default="{ row }">
                            <dict-value :options="dictData.show_status" :value="row.is_show" />
                        </template>
                    </el-table-column>
                    <el-table-column label="排序" prop="sort" show-overflow-tooltip />
                    <el-table-column label="操作" width="120" fixed="right">
                        <template #default="{ row }">
                            <el-button v-perms="['member/edit']" type="primary" link @click="handleEdit(row)">
                                编辑
                            </el-button>
                            <el-button v-perms="['member/delete']" type="danger" link @click="handleDelete(row.id)">
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

<script lang="ts" setup name="memberLists">
import { usePaging } from '@/hooks/usePaging'
import { useDictData } from '@/hooks/useDictOptions'
import { apiMemberLists, apiMemberDelete } from '@/api/member'
import { timeFormat } from '@/utils/util'
import feedback from '@/utils/feedback'
import EditPopup from './edit.vue'

const editRef = shallowRef<InstanceType<typeof EditPopup>>()
// 是否显示编辑框
const showEdit = ref(false)


// 查询条件
const queryParams = reactive({
    name: '',
    avatar: '',
    level: '',
    desc: '',
    is_show: '',
    sort: ''
})

// 选中数据
const selectData = ref<any[]>([])

// 表格选择后回调事件
const handleSelectionChange = (val: any[]) => {
    selectData.value = val.map(({ id }) => id)
}

// 获取字典数据
const { dictData } = useDictData('member_level,show_status,department')

// 分页相关
const { pager, getLists, resetParams, resetPage } = usePaging({
    fetchFun: apiMemberLists,
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
    await apiMemberDelete({ id })
    getLists()
}

getLists()
</script>

