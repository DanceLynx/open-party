import request from '@/utils/request'
import { LikeType } from "@/enums/appEnums"
/**
 * @description 点赞
 * @param {Number} serviceId
 * @param {LikeType} type
 * @return { Promise }
 */
export function like(serviceId : Number, type : LikeType) {
	return request.post({
		url: "/like/like", data: {
			"service_id": serviceId,
			"type": type
		}
	}, { isAuth: true })
}

/**
 * @description 取消点赞
 * @param {Number} serviceId
 * @param {LikeType} type
 * @return { Promise }
 */
export function dislike(serviceId : Number, type : LikeType) {
	return request.post({
		url: "/like/dislike", data: {
			"service_id": serviceId,
			"type": type
		}
	}, { isAuth: true })
}