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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频输出参数
 *
 * @method integer getHitFlag() 获取是否命中
0 未命中
1 命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitFlag(integer $HitFlag) 设置是否命中
0 未命中
1 命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabel() 获取恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告，Custom：自定义词库。
以及令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告，Custom：自定义词库。
以及令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestion() 获取建议您拿到判断结果后的执行操作。
建议值，Block：建议屏蔽，Review：建议复审，Pass：建议通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestion(string $Suggestion) 设置建议您拿到判断结果后的执行操作。
建议值，Block：建议屏蔽，Review：建议复审，Pass：建议通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取得分，0-100
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置得分，0-100
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取音频ASR文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置音频ASR文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取音频片段存储URL，有效期为1天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置音频片段存储URL，有效期为1天
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDuration() 获取音频时长
 * @method void setDuration(string $Duration) 设置音频时长
 * @method string getExtra() 获取拓展字段
 * @method void setExtra(string $Extra) 设置拓展字段
 * @method array getTextResults() 获取文本识别结果
 * @method void setTextResults(array $TextResults) 设置文本识别结果
 * @method array getMoanResults() 获取音频呻吟检测结果
 * @method void setMoanResults(array $MoanResults) 设置音频呻吟检测结果
 * @method array getLanguageResults() 获取音频语言检测结果
 * @method void setLanguageResults(array $LanguageResults) 设置音频语言检测结果
 */
class AudioResult extends AbstractModel
{
    /**
     * @var integer 是否命中
0 未命中
1 命中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitFlag;

    /**
     * @var string 恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告，Custom：自定义词库。
以及令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var string 建议您拿到判断结果后的执行操作。
建议值，Block：建议屏蔽，Review：建议复审，Pass：建议通过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suggestion;

    /**
     * @var integer 得分，0-100
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var string 音频ASR文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 音频片段存储URL，有效期为1天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 音频时长
     */
    public $Duration;

    /**
     * @var string 拓展字段
     */
    public $Extra;

    /**
     * @var array 文本识别结果
     */
    public $TextResults;

    /**
     * @var array 音频呻吟检测结果
     */
    public $MoanResults;

    /**
     * @var array 音频语言检测结果
     */
    public $LanguageResults;

    /**
     * @param integer $HitFlag 是否命中
0 未命中
1 命中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Label 恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告，Custom：自定义词库。
以及令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Suggestion 建议您拿到判断结果后的执行操作。
建议值，Block：建议屏蔽，Review：建议复审，Pass：建议通过
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 得分，0-100
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 音频ASR文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 音频片段存储URL，有效期为1天
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Duration 音频时长
     * @param string $Extra 拓展字段
     * @param array $TextResults 文本识别结果
     * @param array $MoanResults 音频呻吟检测结果
     * @param array $LanguageResults 音频语言检测结果
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("TextResults",$param) and $param["TextResults"] !== null) {
            $this->TextResults = [];
            foreach ($param["TextResults"] as $key => $value){
                $obj = new AudioResultDetailTextResult();
                $obj->deserialize($value);
                array_push($this->TextResults, $obj);
            }
        }

        if (array_key_exists("MoanResults",$param) and $param["MoanResults"] !== null) {
            $this->MoanResults = [];
            foreach ($param["MoanResults"] as $key => $value){
                $obj = new AudioResultDetailMoanResult();
                $obj->deserialize($value);
                array_push($this->MoanResults, $obj);
            }
        }

        if (array_key_exists("LanguageResults",$param) and $param["LanguageResults"] !== null) {
            $this->LanguageResults = [];
            foreach ($param["LanguageResults"] as $key => $value){
                $obj = new AudioResultDetailLanguageResult();
                $obj->deserialize($value);
                array_push($this->LanguageResults, $obj);
            }
        }
    }
}
