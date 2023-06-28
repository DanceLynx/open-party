import request from '@/utils/request'
// 党史知识列表
export function apiKnowledgeLists(params: any) {
    return request.get({ url: '/knowledge/lists', params })
}

// 添加党史知识
export function apiKnowledgeAdd(params: any) {
    return request.post({ url: '/knowledge/add', params })
}

// 编辑党史知识
export function apiKnowledgeEdit(params: any) {
    return request.post({ url: '/knowledge/edit', params })
}

// 删除党史知识
export function apiKnowledgeDelete(params: any) {
    return request.post({ url: '/knowledge/delete', params })
}

// 党史知识详情
export function apiKnowledgeDetail(params: any) {
    return request.get({ url: '/knowledge/detail', params })
}