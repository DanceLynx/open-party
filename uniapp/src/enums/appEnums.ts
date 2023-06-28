//菜单主题类型
export enum ThemeEnum {
	LIGHT = 'light',
	DARK = 'dark'
}

// 客户端
export enum ClientEnum {
	MP_WEIXIN = 1, // 微信-小程序
	OA_WEIXIN = 2, // 微信-公众号
	H5 = 3, // H5
	IOS = 5, //苹果
	ANDROID = 6 //安卓
}

export enum SMSEnum {
	LOGIN = 'YZMDL',
	BIND_MOBILE = 'BDSJHM',
	CHANGE_MOBILE = 'BGSJHM',
	FIND_PASSWORD = 'ZHDLMM'
}

export enum SearchTypeEnum {
	HISTORY = 'history'
}

// 用户资料
export enum FieldType {
	NONE = '',
	AVATAR = 'avatar',
	USERNAME = 'account',
	NICKNAME = 'nickname',
	SEX = 'sex',
	DEPARTMENT = 'department',
	MEMBER_LEVEL = "member_level"
}

// 支付结果
export enum PayStatusEnum {
	SUCCESS = 'success',
	FAIL = 'fail',
	PENDING = 'pending'
}

// 页面状态
export enum PageStatusEnum {
	LOADING = 'loading', // 加载中
	NORMAL = 'normal', // 正常
	ERROR = 'error', // 异常
	EMPTY = 'empty' // 为空
}

export enum PlayerStatusEnum {
	Pause = "pause",// 暂停
	Play = "play",// 播放
}

// 点赞类型
export enum LikeType {
	VIDEO = 10
}

// 评论类型
export enum CommentType {
	VIDEO = 10
}
// 问题类型
export enum QuestionType {
	RADIO = 10,
	CHECKBOX = 20,
	TEXT = 30
}
// 题目类型
export enum TopicType {
	RADIO = 10,
	CHECKBOX = 20,
	TEXT = 30,
	YES_OR_NO = 40
}
// 是否类型
export enum YesNoEnum {
	YES = 1,
	NO = 0
}