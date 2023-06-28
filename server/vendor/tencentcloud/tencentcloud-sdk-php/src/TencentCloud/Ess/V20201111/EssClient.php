<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Ess\V20201111;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ess\V20201111\Models as Models;

/**
 * @method Models\BindEmployeeUserIdWithClientOpenIdResponse BindEmployeeUserIdWithClientOpenId(Models\BindEmployeeUserIdWithClientOpenIdRequest $req) 将电子签系统员工userId与客户系统员工openId进行绑定
 * @method Models\CancelFlowResponse CancelFlow(Models\CancelFlowRequest $req) 用于撤销签署流程
适用场景：如果某个合同流程当前至少还有一方没有签署，则可通过该接口取消该合同流程。常用于合同发错、内容填错，需要及时撤销的场景。
注：如果合同流程中的参与方均已签署完毕，则无法通过该接口撤销合同。
 * @method Models\CancelMultiFlowSignQRCodeResponse CancelMultiFlowSignQRCode(Models\CancelMultiFlowSignQRCodeRequest $req) 此接口（CancelMultiFlowSignQRCode）用于取消一码多扫二维码。该接口对传入的二维码ID，若还在有效期内，可以提前失效。
 * @method Models\CreateBatchCancelFlowUrlResponse CreateBatchCancelFlowUrl(Models\CreateBatchCancelFlowUrlRequest $req) 注：此接口建会废弃，请使用撤销单个签署流程（CancelFlow）接口。
指定需要批量撤回的签署流程Id，获取批量撤销链接。
客户指定需要撤回的签署流程Id，最多100个，超过100不处理；接口调用成功返回批量撤回合同的链接，通过链接跳转到电子签小程序完成批量撤回。
 * @method Models\CreateChannelSubOrganizationModifyQrCodeResponse CreateChannelSubOrganizationModifyQrCode(Models\CreateChannelSubOrganizationModifyQrCodeRequest $req) 生成子客编辑企业信息二维码
 * @method Models\CreateConvertTaskApiResponse CreateConvertTaskApi(Models\CreateConvertTaskApiRequest $req) 上传了word、excel文件后，通过该接口发起文件转换任务，将word、excel文件转换为pdf文件。
 * @method Models\CreateDocumentResponse CreateDocument(Models\CreateDocumentRequest $req) 创建签署流程电子文档
适用场景：见创建签署流程接口。
注：该接口需要给对应的流程指定一个模板id，并且填充该模板中需要补充的信息。是“发起流程”接口的前置接口。
 * @method Models\CreateFlowResponse CreateFlow(Models\CreateFlowRequest $req) 创建签署流程
适用场景：在标准制式的合同场景中，可通过提前预制好模板文件，每次调用模板文件的id，补充合同内容信息及签署信息生成电子合同。
注：该接口是通过模板生成合同流程的前置接口，先创建一个不包含签署文件的流程。配合“创建电子文档”接口和“发起流程”接口使用。
 * @method Models\CreateFlowApproversResponse CreateFlowApprovers(Models\CreateFlowApproversRequest $req) 补充签署流程本企业签署人信息
适用场景：在通过模板或者文件发起合同时，若未指定本企业签署人信息，则流程发起后，可以调用此接口补充签署人。
同一签署人可以补充多个员工作为候选签署人,最终签署人取决于谁先领取合同完成签署。

注：目前暂时只支持补充来源于企业微信的员工作为候选签署人
 * @method Models\CreateFlowByFilesResponse CreateFlowByFiles(Models\CreateFlowByFilesRequest $req) 此接口（CreateFlowByFiles）用来通过上传后的pdf资源编号来创建待签署的合同流程。
适用场景1：适用非制式的合同文件签署。一般开发者自己有完整的签署文件，可以通过该接口传入完整的PDF文件及流程信息生成待签署的合同流程。
适用场景2：可通过该接口传入制式合同文件，同时在指定位置添加签署控件。可以起到接口创建临时模板的效果。如果是标准的制式文件，建议使用模板功能生成模板ID进行合同流程的生成。
注意事项：该接口需要依赖“多文件上传”接口生成pdf资源编号（FileIds）进行使用。
 * @method Models\CreateFlowEvidenceReportResponse CreateFlowEvidenceReport(Models\CreateFlowEvidenceReportRequest $req) 创建出证报告，返回报告 ID。需要配合出证套餐才能调用。
出证需要一定时间，建议调用创建出证24小时之后再通过DescribeFlowEvidenceReport进行查询。
 * @method Models\CreateFlowRemindsResponse CreateFlowReminds(Models\CreateFlowRemindsRequest $req) 指定需要批量催办的签署流程Id，批量催办合同，最多100个; 接口失败后返回错误信息
注意:
该接口不可直接调用，请联系客户经理申请使用
仅能催办当前状态为“待签署”的签署人，且只能催办一次
发起合同时，签署人的NotifyType需设置为sms，否则无法催办
 * @method Models\CreateFlowSignReviewResponse CreateFlowSignReview(Models\CreateFlowSignReviewRequest $req) 提交企业签署流程审批结果
适用场景: 
在通过接口(CreateFlow 或者CreateFlowByFiles)创建签署流程时，若指定了参数 NeedSignReview 为true，且发起方企业作为签署方参与了流程签署，则可以调用此接口提交企业内部签署审批结果。
若签署流程状态正常，且本企业存在签署方未签署，同一签署流程可以多次提交签署审批结果，签署时的最后一个“审批结果”有效。

 * @method Models\CreateFlowSignUrlResponse CreateFlowSignUrl(Models\CreateFlowSignUrlRequest $req) 创建集成页面签署链接，请联系客户经理申请使用
 * @method Models\CreateIntegrationEmployeesResponse CreateIntegrationEmployees(Models\CreateIntegrationEmployeesRequest $req) 创建员工,如需在此接口提醒员工实名，入参Employees的OpenId不传
 * @method Models\CreateIntegrationUserRolesResponse CreateIntegrationUserRoles(Models\CreateIntegrationUserRolesRequest $req) 绑定员工与对应角色
 * @method Models\CreateMultiFlowSignQRCodeResponse CreateMultiFlowSignQRCode(Models\CreateMultiFlowSignQRCodeRequest $req) 此接口（CreateMultiFlowSignQRCode）用于创建一码多扫流程签署二维码。
适用场景：无需填写签署人信息，可通过模板id生成签署二维码，签署人可通过扫描二维码补充签署信息进行实名签署。常用于提前不知道签署人的身份信息场景，例如：劳务工招工、大批量员工入职等场景。

**本接口适用于发起方没有填写控件的 B2C或者单C模板**

**若是B2C模板,还要满足以下任意一个条件**
- 模板中配置的签署顺序是无序
- B端企业的签署方式是静默签署
- B端企业是非首位签署
 * @method Models\CreatePrepareFlowResponse CreatePrepareFlow(Models\CreatePrepareFlowRequest $req) 创建快速发起流程
适用场景：用户通过API 合同文件及签署信息，并可通过我们返回的URL在页面完成签署控件等信息的编辑与确认，快速发起合同.
注：该接口文件的resourceId 是通过上传文件之后获取的。
 * @method Models\CreatePreparedPersonalEsignResponse CreatePreparedPersonalEsign(Models\CreatePreparedPersonalEsignRequest $req) 本接口（CreatePreparedPersonalEsign）用于创建导入个人印章（处方单场景专用，在开通个人自动签之后调用，使用此接口请与客户经理确认）。
 * @method Models\CreateReleaseFlowResponse CreateReleaseFlow(Models\CreateReleaseFlowRequest $req) 发起解除协议，主要应用场景为：基于一份已经签署的合同(签署流程)，进行解除操作。
 * @method Models\CreateSchemeUrlResponse CreateSchemeUrl(Models\CreateSchemeUrlRequest $req) 获取小程序签署链接

适用场景：如果需要签署人在自己的APP、小程序、H5应用中签署，可以通过此接口获取跳转腾讯电子签小程序的签署跳转链接。

注：如果签署人是在PC端扫码签署，可以通过生成跳转链接自主转换成二维码，让签署人在PC端扫码签署。


跳转到小程序的实现，参考官方文档（分为<a href="https://developers.weixin.qq.com/miniprogram/dev/api/navigate/wx.navigateToMiniProgram.html">全屏</a>、<a href="https://developers.weixin.qq.com/miniprogram/dev/framework/open-ability/openEmbeddedMiniProgram.html">半屏</a>两种方式）


如您需要自主配置小程序跳转链接，请参考: <a href="https://cloud.tencent.com/document/product/1323/74774">跳转小程序链接配置说明</a>
 * @method Models\CreateSealPolicyResponse CreateSealPolicy(Models\CreateSealPolicyRequest $req) 对企业员工进行印章授权
 * @method Models\CreateUserAutoSignEnableUrlResponse CreateUserAutoSignEnableUrl(Models\CreateUserAutoSignEnableUrlRequest $req) 企业方可以通过此接口获取个人用户开启自动签的跳转链接（处方单场景专用，使用此接口请与客户经理确认）
 * @method Models\DeleteIntegrationEmployeesResponse DeleteIntegrationEmployees(Models\DeleteIntegrationEmployeesRequest $req) 移除员工
 * @method Models\DeleteIntegrationRoleUsersResponse DeleteIntegrationRoleUsers(Models\DeleteIntegrationRoleUsersRequest $req) 解绑员工与对应角色关系
 * @method Models\DeleteSealPoliciesResponse DeleteSealPolicies(Models\DeleteSealPoliciesRequest $req) 撤销员工持有的印章权限
 * @method Models\DescribeFileUrlsResponse DescribeFileUrls(Models\DescribeFileUrlsRequest $req) 查询文件下载URL
适用场景：通过传参合同流程编号，下载对应的合同PDF文件流到本地。
 * @method Models\DescribeFlowBriefsResponse DescribeFlowBriefs(Models\DescribeFlowBriefsRequest $req) 查询流程摘要
适用场景：可用于主动查询某个合同流程的签署状态信息。可以配合回调通知使用。
日调用量默认10W
 * @method Models\DescribeFlowEvidenceReportResponse DescribeFlowEvidenceReport(Models\DescribeFlowEvidenceReportRequest $req) 查询出证报告，返回报告 URL。
 * @method Models\DescribeFlowInfoResponse DescribeFlowInfo(Models\DescribeFlowInfoRequest $req) 查询合同详情
适用场景：可用于主动查询某个合同详情信息。
 * @method Models\DescribeFlowTemplatesResponse DescribeFlowTemplates(Models\DescribeFlowTemplatesRequest $req) 当模板较多或模板中的控件较多时，可以通过查询模板接口更方便的获取模板列表，以及每个模板内的控件信息。该接口常用来配合“创建电子文档”接口作为前置的接口使用。
 * @method Models\DescribeIntegrationEmployeesResponse DescribeIntegrationEmployees(Models\DescribeIntegrationEmployeesRequest $req) 查询企业员工列表，每次返回的数据量最大为20
 * @method Models\DescribeIntegrationMainOrganizationUserResponse DescribeIntegrationMainOrganizationUser(Models\DescribeIntegrationMainOrganizationUserRequest $req) 通过子企业影子账号查询主企业员工账号
 * @method Models\DescribeIntegrationRolesResponse DescribeIntegrationRoles(Models\DescribeIntegrationRolesRequest $req) 查询企业角色列表
 * @method Models\DescribeOrganizationGroupOrganizationsResponse DescribeOrganizationGroupOrganizations(Models\DescribeOrganizationGroupOrganizationsRequest $req) 此API接口用户查询加入集团的成员企业
 * @method Models\DescribeOrganizationSealsResponse DescribeOrganizationSeals(Models\DescribeOrganizationSealsRequest $req) 查询企业印章的列表，需要操作者具有查询印章权限
客户指定需要获取的印章数量和偏移量，数量最多100，超过100按100处理；入参InfoType控制印章是否携带授权人信息，为1则携带，为0则返回的授权人信息为空数组。接口调用成功返回印章的信息列表还有企业印章的总数。
 * @method Models\DescribeThirdPartyAuthCodeResponse DescribeThirdPartyAuthCode(Models\DescribeThirdPartyAuthCodeRequest $req) 通过AuthCode查询用户是否实名
 * @method Models\DescribeUserAutoSignStatusResponse DescribeUserAutoSignStatus(Models\DescribeUserAutoSignStatusRequest $req) 企业方可以通过此接口查询个人用户自动签开启状态。（处方单场景专用，使用此接口请与客户经理确认）
 * @method Models\DisableUserAutoSignResponse DisableUserAutoSign(Models\DisableUserAutoSignRequest $req) 企业方可以通过此接口关闭个人的自动签功能（处方单场景专用，使用此接口请与客户经理确认）
 * @method Models\GetTaskResultApiResponse GetTaskResultApi(Models\GetTaskResultApiRequest $req) 通过发起转换任务接口（CreateConvertTaskApi）返回的任务Id查询转换任务状态，通过本接口确认转换任务是否完成。大文件转换所需的时间可能会比较长。
 * @method Models\ModifyApplicationCallbackInfoResponse ModifyApplicationCallbackInfo(Models\ModifyApplicationCallbackInfoRequest $req) 新增/删除应用callbackinfo
callbackinfo包含： 回调地址和签名key
操作：新增/删除
 * @method Models\StartFlowResponse StartFlow(Models\StartFlowRequest $req) 此接口用于发起流程
适用场景：见创建签署流程接口。
注：该接口是“创建电子文档”接口的后置接口，用于激活包含完整合同信息（模板及内容信息）的流程。激活后的流程就是一份待签署的电子合同。
 * @method Models\UnbindEmployeeUserIdWithClientOpenIdResponse UnbindEmployeeUserIdWithClientOpenId(Models\UnbindEmployeeUserIdWithClientOpenIdRequest $req) 将存在绑定关系的电子签系统员工userId与客户系统员工openId进行解绑
 * @method Models\UpdateIntegrationEmployeesResponse UpdateIntegrationEmployees(Models\UpdateIntegrationEmployeesRequest $req) 更新员工信息(姓名，手机号，邮件)，用户实名后无法更改姓名与手机号
 * @method Models\UploadFilesResponse UploadFiles(Models\UploadFilesRequest $req) 此接口（UploadFiles）用于文件上传。
适用场景：用于生成pdf资源编号（FileIds）来配合“用PDF创建流程”接口使用，使用场景可详见“用PDF创建流程”接口说明。
其中上传的文件，图片类型(png/jpg/jpeg)大小限制为5M，其他大小限制为60M。
调用时需要设置Domain/接口请求域名为 file.ess.tencent.cn，并设置参数Version/版本号为2020-12-22
 * @method Models\VerifyPdfResponse VerifyPdf(Models\VerifyPdfRequest $req) 对流程的合同文件进行验证，判断文件是否合法。
 */

class EssClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ess.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ess";

    /**
     * @var string
     */
    protected $version = "2020-11-11";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("ess")."\\"."V20201111\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
