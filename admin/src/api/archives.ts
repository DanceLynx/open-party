import request from '@/utils/request'

// 档案表列表
export function apiArchivesLists(params: any) {
    return request.get({ url: '/archives.archives/lists', params })
}

// 添加档案表
export function apiArchivesAdd(params: any) {
    return request.post({ url: '/archives.archives/add', params })
}

// 编辑档案表
export function apiArchivesEdit(params: any) {
    return request.post({ url: '/archives.archives/edit', params })
}

// 删除档案表
export function apiArchivesDelete(params: any) {
    return request.post({ url: '/archives.archives/delete', params })
}

// 档案表详情
export function apiArchivesDetail(params: any) {
    return request.get({ url: '/archives.archives/detail', params })
}