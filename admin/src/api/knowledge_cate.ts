import request from '@/utils/request'

// 党史类目列表
export function apiKnowledgeCateLists(params: any) {
    return request.get({ url: '/knowledge_cate/lists', params })
}
// 文章分类列表
export function apiKnowledgeCateAll(params?: any) {
    return request.get({ url: '/knowledge_cate/all', params })
}
// 添加党史类目
export function apiKnowledgeCateAdd(params: any) {
    return request.post({ url: '/knowledge_cate/add', params })
}

// 编辑党史类目
export function apiKnowledgeCateEdit(params: any) {
    return request.post({ url: '/knowledge_cate/edit', params })
}

// 删除党史类目
export function apiKnowledgeCateDelete(params: any) {
    return request.post({ url: '/knowledge_cate/delete', params })
}

// 党史类目详情
export function apiKnowledgeCateDetail(params: any) {
    return request.get({ url: '/knowledge_cate/detail', params })
}