import request from '@/utils/request'
/**
 * @description 获取党政知识列表
 * @return { Promise }
 */
export function getKnowledgeList(data : Record<string, any>) {
	return request.get({ url: '/knowledge/lists', data: data })
}

/**
 * @description 获取党政知识类目列表
 * @return { Promise }
 */
export function getKnowledgeCateList(data : Record<string, any>) {
	return request.get({ url: '/knowledge/cates', data: data })
}

/**
 * @description 获取党政详情
 * @param { number } id
 * @return { Promise }
 */
export function getKnowledgeDetail(data : { id : number }) {
	return request.get({ url: '/knowledge/detail', data: data })
}