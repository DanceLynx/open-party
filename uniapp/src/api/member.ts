import request from '@/utils/request'
/**
 * @description 获取党员列表
 * @return { Promise }
 */
export function getMemberList(data : Record<string, any>) {
	return request.get({ url: '/member/lists', data: data })
}