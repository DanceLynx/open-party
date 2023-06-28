const cache = {
    key: 'like_admin_',
    //设置缓存(expire为缓存时效)
    set(key: string, value: any, expire?: string) {
        key = this.getKey(key)
        let data: any = {
            expire: expire ? this.time() + expire : '',
            value
        }

        if (typeof data === 'object') {
            data = JSON.stringify(data)
        }
        try {
            window.localStorage.setItem(key, data)
        } catch (e) {
            return null
        }
    },
    get(key: string) {
        key = this.getKey(key)
        try {
            const data = window.localStorage.getItem(key)
            if (!data) {
                return null
            }
            const { value, expire } = JSON.parse(data)
            if (expire && expire < this.time()) {
                window.localStorage.removeItem(key)
                return null
            }
            return value
        } catch (e) {
            return null
        }
    },
    //获取当前时间
    time() {
        return Math.round(new Date().getTime() / 1000)
    },
    remove(key: string) {
        key = this.getKey(key)
        window.localStorage.removeItem(key)
    },
    clear() {
        window.localStorage.clear()
    },
    getKey(key: string) {
        return this.key + key
    }
}

export default cache
