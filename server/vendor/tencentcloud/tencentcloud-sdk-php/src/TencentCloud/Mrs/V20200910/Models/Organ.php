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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 器官
 *
 * @method Part getPart() 获取部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPart(Part $Part) 设置部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSize() 获取大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(array $Size) 设置大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getEnvelope() 获取包膜
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvelope(BlockInfo $Envelope) 设置包膜
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getEdge() 获取边缘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEdge(BlockInfo $Edge) 设置边缘
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getInnerEcho() 获取内部回声
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerEcho(BlockInfo $InnerEcho) 设置内部回声
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getGland() 获取腺体
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGland(BlockInfo $Gland) 设置腺体
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getShape() 获取形状
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShape(BlockInfo $Shape) 设置形状
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getThickness() 获取厚度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThickness(BlockInfo $Thickness) 设置厚度
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getShapeAttr() 获取形态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShapeAttr(BlockInfo $ShapeAttr) 设置形态
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getCDFI() 获取血液cdfi
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCDFI(BlockInfo $CDFI) 设置血液cdfi
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getSymDesc() 获取描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSymDesc(BlockInfo $SymDesc) 设置描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getSizeStatus() 获取大小状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSizeStatus(BlockInfo $SizeStatus) 设置大小状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getOutline() 获取轮廓
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutline(BlockInfo $Outline) 设置轮廓
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getStructure() 获取结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStructure(BlockInfo $Structure) 设置结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getDensity() 获取密度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDensity(BlockInfo $Density) 设置密度
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getVas() 获取血管
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVas(BlockInfo $Vas) 设置血管
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getCysticwall() 获取囊壁
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCysticwall(BlockInfo $Cysticwall) 设置囊壁
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getCapsule() 获取被膜
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCapsule(BlockInfo $Capsule) 设置被膜
注意：此字段可能返回 null，表示取不到有效值。
 * @method Size getIsthmusThicknese() 获取峡部厚度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsthmusThicknese(Size $IsthmusThicknese) 设置峡部厚度
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getInnerEchoDistribution() 获取内部回声分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerEchoDistribution(BlockInfo $InnerEchoDistribution) 设置内部回声分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrc() 获取原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrc(string $Src) 设置原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndex() 获取原文位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(array $Index) 设置原文位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getTransparent() 获取透声度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransparent(BlockInfo $Transparent) 设置透声度
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getMriAdc() 获取MRI ADC
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMriAdc(BlockInfo $MriAdc) 设置MRI ADC
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getMriDwi() 获取MRI DWI
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMriDwi(BlockInfo $MriDwi) 设置MRI DWI
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getMriT1() 获取MRI T1信号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMriT1(BlockInfo $MriT1) 设置MRI T1信号
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getMriT2() 获取MRI T2信号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMriT2(BlockInfo $MriT2) 设置MRI T2信号
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getCtHu() 获取CT HU值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCtHu(BlockInfo $CtHu) 设置CT HU值
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getSuvmax() 获取SUmax值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuvmax(BlockInfo $Suvmax) 设置SUmax值
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getMetabolism() 获取代谢情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetabolism(BlockInfo $Metabolism) 设置代谢情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getRadioactiveUptake() 获取放射性摄取
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRadioactiveUptake(BlockInfo $RadioactiveUptake) 设置放射性摄取
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getLymphEnlargement() 获取淋巴结情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLymphEnlargement(BlockInfo $LymphEnlargement) 设置淋巴结情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getImageFeature() 获取影像特征
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageFeature(BlockInfo $ImageFeature) 设置影像特征
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getDuct() 获取导管
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuct(BlockInfo $Duct) 设置导管
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getTrend() 获取趋势
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrend(BlockInfo $Trend) 设置趋势
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getOperation() 获取手术情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperation(BlockInfo $Operation) 设置手术情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCoords() 获取器官在报告图片中的坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoords(array $Coords) 设置器官在报告图片中的坐标
注意：此字段可能返回 null，表示取不到有效值。
 */
class Organ extends AbstractModel
{
    /**
     * @var Part 部位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Part;

    /**
     * @var array 大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var BlockInfo 包膜
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Envelope;

    /**
     * @var BlockInfo 边缘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Edge;

    /**
     * @var BlockInfo 内部回声
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerEcho;

    /**
     * @var BlockInfo 腺体
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gland;

    /**
     * @var BlockInfo 形状
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Shape;

    /**
     * @var BlockInfo 厚度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Thickness;

    /**
     * @var BlockInfo 形态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShapeAttr;

    /**
     * @var BlockInfo 血液cdfi
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CDFI;

    /**
     * @var BlockInfo 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SymDesc;

    /**
     * @var BlockInfo 大小状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SizeStatus;

    /**
     * @var BlockInfo 轮廓
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Outline;

    /**
     * @var BlockInfo 结构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Structure;

    /**
     * @var BlockInfo 密度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Density;

    /**
     * @var BlockInfo 血管
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vas;

    /**
     * @var BlockInfo 囊壁
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cysticwall;

    /**
     * @var BlockInfo 被膜
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Capsule;

    /**
     * @var Size 峡部厚度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsthmusThicknese;

    /**
     * @var BlockInfo 内部回声分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerEchoDistribution;

    /**
     * @var string 原文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Src;

    /**
     * @var array 原文位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var BlockInfo 透声度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Transparent;

    /**
     * @var BlockInfo MRI ADC
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MriAdc;

    /**
     * @var BlockInfo MRI DWI
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MriDwi;

    /**
     * @var BlockInfo MRI T1信号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MriT1;

    /**
     * @var BlockInfo MRI T2信号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MriT2;

    /**
     * @var BlockInfo CT HU值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CtHu;

    /**
     * @var BlockInfo SUmax值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suvmax;

    /**
     * @var BlockInfo 代谢情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metabolism;

    /**
     * @var BlockInfo 放射性摄取
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RadioactiveUptake;

    /**
     * @var BlockInfo 淋巴结情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LymphEnlargement;

    /**
     * @var BlockInfo 影像特征
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageFeature;

    /**
     * @var BlockInfo 导管
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duct;

    /**
     * @var BlockInfo 趋势
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Trend;

    /**
     * @var BlockInfo 手术情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operation;

    /**
     * @var array 器官在报告图片中的坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Coords;

    /**
     * @param Part $Part 部位
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Size 大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Envelope 包膜
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Edge 边缘
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $InnerEcho 内部回声
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Gland 腺体
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Shape 形状
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Thickness 厚度
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $ShapeAttr 形态
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $CDFI 血液cdfi
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $SymDesc 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $SizeStatus 大小状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Outline 轮廓
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Structure 结构
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Density 密度
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Vas 血管
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Cysticwall 囊壁
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Capsule 被膜
注意：此字段可能返回 null，表示取不到有效值。
     * @param Size $IsthmusThicknese 峡部厚度
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $InnerEchoDistribution 内部回声分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Src 原文
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Index 原文位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Transparent 透声度
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $MriAdc MRI ADC
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $MriDwi MRI DWI
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $MriT1 MRI T1信号
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $MriT2 MRI T2信号
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $CtHu CT HU值
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Suvmax SUmax值
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Metabolism 代谢情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $RadioactiveUptake 放射性摄取
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $LymphEnlargement 淋巴结情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $ImageFeature 影像特征
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Duct 导管
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Trend 趋势
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Operation 手术情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Coords 器官在报告图片中的坐标
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Part",$param) and $param["Part"] !== null) {
            $this->Part = new Part();
            $this->Part->deserialize($param["Part"]);
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = [];
            foreach ($param["Size"] as $key => $value){
                $obj = new Size();
                $obj->deserialize($value);
                array_push($this->Size, $obj);
            }
        }

        if (array_key_exists("Envelope",$param) and $param["Envelope"] !== null) {
            $this->Envelope = new BlockInfo();
            $this->Envelope->deserialize($param["Envelope"]);
        }

        if (array_key_exists("Edge",$param) and $param["Edge"] !== null) {
            $this->Edge = new BlockInfo();
            $this->Edge->deserialize($param["Edge"]);
        }

        if (array_key_exists("InnerEcho",$param) and $param["InnerEcho"] !== null) {
            $this->InnerEcho = new BlockInfo();
            $this->InnerEcho->deserialize($param["InnerEcho"]);
        }

        if (array_key_exists("Gland",$param) and $param["Gland"] !== null) {
            $this->Gland = new BlockInfo();
            $this->Gland->deserialize($param["Gland"]);
        }

        if (array_key_exists("Shape",$param) and $param["Shape"] !== null) {
            $this->Shape = new BlockInfo();
            $this->Shape->deserialize($param["Shape"]);
        }

        if (array_key_exists("Thickness",$param) and $param["Thickness"] !== null) {
            $this->Thickness = new BlockInfo();
            $this->Thickness->deserialize($param["Thickness"]);
        }

        if (array_key_exists("ShapeAttr",$param) and $param["ShapeAttr"] !== null) {
            $this->ShapeAttr = new BlockInfo();
            $this->ShapeAttr->deserialize($param["ShapeAttr"]);
        }

        if (array_key_exists("CDFI",$param) and $param["CDFI"] !== null) {
            $this->CDFI = new BlockInfo();
            $this->CDFI->deserialize($param["CDFI"]);
        }

        if (array_key_exists("SymDesc",$param) and $param["SymDesc"] !== null) {
            $this->SymDesc = new BlockInfo();
            $this->SymDesc->deserialize($param["SymDesc"]);
        }

        if (array_key_exists("SizeStatus",$param) and $param["SizeStatus"] !== null) {
            $this->SizeStatus = new BlockInfo();
            $this->SizeStatus->deserialize($param["SizeStatus"]);
        }

        if (array_key_exists("Outline",$param) and $param["Outline"] !== null) {
            $this->Outline = new BlockInfo();
            $this->Outline->deserialize($param["Outline"]);
        }

        if (array_key_exists("Structure",$param) and $param["Structure"] !== null) {
            $this->Structure = new BlockInfo();
            $this->Structure->deserialize($param["Structure"]);
        }

        if (array_key_exists("Density",$param) and $param["Density"] !== null) {
            $this->Density = new BlockInfo();
            $this->Density->deserialize($param["Density"]);
        }

        if (array_key_exists("Vas",$param) and $param["Vas"] !== null) {
            $this->Vas = new BlockInfo();
            $this->Vas->deserialize($param["Vas"]);
        }

        if (array_key_exists("Cysticwall",$param) and $param["Cysticwall"] !== null) {
            $this->Cysticwall = new BlockInfo();
            $this->Cysticwall->deserialize($param["Cysticwall"]);
        }

        if (array_key_exists("Capsule",$param) and $param["Capsule"] !== null) {
            $this->Capsule = new BlockInfo();
            $this->Capsule->deserialize($param["Capsule"]);
        }

        if (array_key_exists("IsthmusThicknese",$param) and $param["IsthmusThicknese"] !== null) {
            $this->IsthmusThicknese = new Size();
            $this->IsthmusThicknese->deserialize($param["IsthmusThicknese"]);
        }

        if (array_key_exists("InnerEchoDistribution",$param) and $param["InnerEchoDistribution"] !== null) {
            $this->InnerEchoDistribution = new BlockInfo();
            $this->InnerEchoDistribution->deserialize($param["InnerEchoDistribution"]);
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Transparent",$param) and $param["Transparent"] !== null) {
            $this->Transparent = new BlockInfo();
            $this->Transparent->deserialize($param["Transparent"]);
        }

        if (array_key_exists("MriAdc",$param) and $param["MriAdc"] !== null) {
            $this->MriAdc = new BlockInfo();
            $this->MriAdc->deserialize($param["MriAdc"]);
        }

        if (array_key_exists("MriDwi",$param) and $param["MriDwi"] !== null) {
            $this->MriDwi = new BlockInfo();
            $this->MriDwi->deserialize($param["MriDwi"]);
        }

        if (array_key_exists("MriT1",$param) and $param["MriT1"] !== null) {
            $this->MriT1 = new BlockInfo();
            $this->MriT1->deserialize($param["MriT1"]);
        }

        if (array_key_exists("MriT2",$param) and $param["MriT2"] !== null) {
            $this->MriT2 = new BlockInfo();
            $this->MriT2->deserialize($param["MriT2"]);
        }

        if (array_key_exists("CtHu",$param) and $param["CtHu"] !== null) {
            $this->CtHu = new BlockInfo();
            $this->CtHu->deserialize($param["CtHu"]);
        }

        if (array_key_exists("Suvmax",$param) and $param["Suvmax"] !== null) {
            $this->Suvmax = new BlockInfo();
            $this->Suvmax->deserialize($param["Suvmax"]);
        }

        if (array_key_exists("Metabolism",$param) and $param["Metabolism"] !== null) {
            $this->Metabolism = new BlockInfo();
            $this->Metabolism->deserialize($param["Metabolism"]);
        }

        if (array_key_exists("RadioactiveUptake",$param) and $param["RadioactiveUptake"] !== null) {
            $this->RadioactiveUptake = new BlockInfo();
            $this->RadioactiveUptake->deserialize($param["RadioactiveUptake"]);
        }

        if (array_key_exists("LymphEnlargement",$param) and $param["LymphEnlargement"] !== null) {
            $this->LymphEnlargement = new BlockInfo();
            $this->LymphEnlargement->deserialize($param["LymphEnlargement"]);
        }

        if (array_key_exists("ImageFeature",$param) and $param["ImageFeature"] !== null) {
            $this->ImageFeature = new BlockInfo();
            $this->ImageFeature->deserialize($param["ImageFeature"]);
        }

        if (array_key_exists("Duct",$param) and $param["Duct"] !== null) {
            $this->Duct = new BlockInfo();
            $this->Duct->deserialize($param["Duct"]);
        }

        if (array_key_exists("Trend",$param) and $param["Trend"] !== null) {
            $this->Trend = new BlockInfo();
            $this->Trend->deserialize($param["Trend"]);
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = new BlockInfo();
            $this->Operation->deserialize($param["Operation"]);
        }

        if (array_key_exists("Coords",$param) and $param["Coords"] !== null) {
            $this->Coords = [];
            foreach ($param["Coords"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Coords, $obj);
            }
        }
    }
}
