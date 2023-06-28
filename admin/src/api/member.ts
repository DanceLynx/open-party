import request from '@/utils/request'

// 党员表列表
export function apiMemberLists(params: any) {
    return request.get({ url: '/member/lists', params })
}

// 添加党员表
export function apiMemberAdd(params: any) {
    return request.post({ url: '/member/add', params })
}

// 编辑党员表
export function apiMemberEdit(params: any) {
    return request.post({ url: '/member/edit', params })
}

// 删除党员表
export function apiMemberDelete(params: any) {
    return request.post({ url: '/member/delete', params })
}

// 党员表详情
export function apiMemberDetail(params: any) {
    return request.get({ url: '/member/detail', params })
}