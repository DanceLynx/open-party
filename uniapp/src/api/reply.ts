import request from '@/utils/request'
/**
 * @description 添加回复
 * @param {Number} comment_id
 * @param {CommentType} type
 * @param {String} content
 * @return { Promise }
 */
export function addReply(comment_id : Number, content : String) {
	return request.post({
		url: "/reply/add", data: {
			"comment_id": comment_id,
			"content": content
		}
	}, { isAuth: true })
}

/**
 * @description 删除回复
 * @param {Number} id 
 * @return { Promise }
 */
export function delReply(id : Number) {
	return request.get({
		url: "/reply/del", data: {
			"id": id
		}
	}, { isAuth: true })
}