<template>
    <div>
        <el-card class="!border-none mb-4" shadow="never">
            <el-form
                class="mb-[-16px]"
                :model="queryParams"
                inline
            >
                <el-form-item label="党史分类" prop="cid">
                    <el-select class="w-[280px]" v-model="queryParams.cid" clearable placeholder="请选择党史分类">
                        <el-option label="全部" value=""></el-option>
                        <el-option v-for="(item,index) of optionsData.knowledge_cate" :key="index" :label="item.title" :value="item.id"/>
                    </el-select>
                </el-form-item>
                <el-form-item label="文章标题" prop="title">
                    <el-input class="w-[280px]" v-model="queryParams.title" clearable placeholder="请输入文章标题" />
                </el-form-item>
                <el-form-item label="简介" prop="desc">
                    <el-input class="w-[280px]" v-model="queryParams.desc" clearable placeholder="请输入简介" />
                </el-form-item>
                <el-form-item label="作者" prop="author">
                    <el-input class="w-[280px]" v-model="queryParams.author" clearable placeholder="请输入作者" />
                </el-form-item>
                <el-form-item label="浏览量" prop="click">
                    <el-input class="w-[280px]" v-model="queryParams.click" clearable placeholder="请输入浏览量" />
                </el-form-item>
                <el-form-item label="是否显示" prop="is_show">
                    <el-select class="w-[280px]" v-model="queryParams.is_show" clearable placeholder="请选择是否显示">
                        <el-option label="全部" value=""></el-option>
                        <el-option 
                            v-for="(item, index) in dictData.show_status"
                            :key="index" 
                            :label="item.name"
                            :value="item.value"
                        />
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
            <el-button v-perms="['knowledge/add']" type="primary" @click="handleAdd">
                <template #icon>
                    <icon name="el-icon-Plus" />
                </template>
                发布
            </el-button>
            <el-button
                v-perms="['knowledge/delete']"
                :disabled="!selectData.length"
                @click="handleDelete(selectData)"
            >
                删除
            </el-button>
            <div class="mt-4">
                <el-table :data="pager.lists" @selection-change="handleSelectionChange">
                    <el-table-column type="selection" width="55" />
                    <el-table-column label="类目" prop="cate_name" show-overflow-tooltip />
                    <el-table-column label="文章标题" prop="title" show-overflow-tooltip />
                    <el-table-column label="文章图片" prop="image">
                        <template #default="{ row }">
                            <el-image style="width:50px;height:50px;" :src="row.image" />
                        </template>
                    </el-table-column>
                    <el-table-column label="作者" prop="author" show-overflow-tooltip />
                    <el-table-column label="浏览量" prop="click" show-overflow-tooltip />
                    <el-table-column label="是否显示" prop="is_show">
                        <template #default="{ row }">
                            <dict-value :options="dictData.show_status" :value="row.is_show" />
                        </template>
                    </el-table-column>
                    <el-table-column label="排序" prop="sort" show-overflow-tooltip />
                    <el-table-column label="操作" width="120" fixed="right">
                        <template #default="{ row }">
                             <el-button
                                v-perms="['knowledge/edit']"
                                type="primary"
                                link
                                @click="handleEdit(row)"
                            >
                                编辑
                            </el-button>
                            <el-button
                                v-perms="['knowledge/delete']"
                                type="danger"
                                link
                                @click="handleDelete(row.id)"
                            >
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

<script lang="ts" setup name="knowledgeLists">
import { usePaging } from '@/hooks/usePaging'
import { useDictData } from '@/hooks/useDictOptions'
import { useDictOptions } from '@/hooks/useDictOptions'
import { apiKnowledgeLists, apiKnowledgeDelete } from '@/api/knowledge'
import {apiKnowledgeCateAll} from "@/api/knowledge_cate"
import { timeFormat } from '@/utils/util'
import feedback from '@/utils/feedback'
import EditPopup from './edit.vue'

const editRef = shallowRef<InstanceType<typeof EditPopup>>()
// 是否显示编辑框
const showEdit = ref(false)


// 查询条件
const queryParams = reactive({
    cid: '',
    title: '',
    desc: '',
    abstract: '',
    image: '',
    author: '',
    content: '',
    click: '',
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
const { dictData } = useDictData('show_status')

const {optionsData} = useDictOptions<{knowledge_cate:any[]}>({
    knowledge_cate:{
        api: apiKnowledgeCateAll
    }
})

// 分页相关
const { pager, getLists, resetParams, resetPage } = usePaging({
    fetchFun: apiKnowledgeLists,
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
    await apiKnowledgeDelete({ id })
    getLists()
}

getLists()
</script>

