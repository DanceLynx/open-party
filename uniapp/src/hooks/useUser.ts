import { useUserStore } from "@/stores/user";

export function usePermission() {
	const store = useUserStore()
	const hasPermission = (userId : Number) => {
		// 判断用户是否登录
		if (!store.isLogin) return false
		// 判断userid是否相等
		if (store.$state.userInfo.id != userId) return false
		return true
	}
	return { hasPermission }
}