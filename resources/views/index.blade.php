<div class="diy-grid-layout" id="app1">
    <div style="height:100%; padding: 0">
        <el-row :gutter="15">
            <el-col :md="24" :xs="24">
                <el-card shadow="hover" style="margin-bottom:15px;">
                    <template #header>
                        <span>CPU信息</span>
                    </template>
                    <el-row :gutter="15">
                        <el-col :md="16" :xs="24">
                            <div class="table">
                                <table cellspacing="0" style="width: 100%;">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="cell">型号</div>
                                        </td>
                                        <td>
                                            <div class="cell" v-if="cpuInfo">@{{cpuInfo.name}}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">核心数</div>
                                        </td>
                                        <td>
                                            <div class="cell" v-if="cpuInfo">@{{ cpuInfo.cores }}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">缓存</div>
                                        </td>
                                        <td>
                                            <div class="cell" v-if="cpuInfo">@{{ cpuInfo.cache }}M</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">使用率</div>
                                        </td>
                                        <td>
                                            <div class="cell" v-if="cpuInfo">@{{ cpuInfo.usage }}%</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">空闲率</div>
                                        </td>
                                        <td>
                                            <div class="cell" v-if="cpuInfo">@{{ cpuInfo.free }}1%</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </el-col>
                        <el-col :md="8" :xs="24">
                            <div id="cpuEcharts" style="height: 290px;"></div>
                        </el-col>
                    </el-row>
                </el-card>
            </el-col>
        </el-row>

        <el-row :gutter="15">
            <el-col :md="24" :xs="24">
                <el-card shadow="hover" style="margin-bottom:15px;">
                    <template #header>
                        <span>内存信息</span>
                    </template>
                    <el-row :gutter="15">
                        <el-col :md="16" :xs="24">
                            <div class="table">
                                <table cellspacing="0" style="width: 100%;">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="cell">总内存</div>
                                        </td>
                                        <td>
                                            <div class="cell" v-if="memoryInfo">@{{ memoryInfo.total }}G</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">已使用内存</div>
                                        </td>
                                        <td>
                                            <div class="cell" v-if="memoryInfo">@{{ memoryInfo.usage }}G</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">PHP使用内存</div>
                                        </td>
                                        <td>
                                            <div class="cell" v-if="memoryInfo">@{{ memoryInfo.php }}M</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">空闲内存</div>
                                        </td>
                                        <td>
                                            <div class="cell" v-if="memoryInfo">@{{ memoryInfo.free }}G</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cell">使用率</div>
                                        </td>
                                        <td>
                                            <div class="cell" v-if="memoryInfo">@{{ memoryInfo.rate }}%</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </el-col>
                        <el-col :md="8" :xs="24">
                            <div id="memoryEcharts" style="height: 290px;"></div>
                        </el-col>
                    </el-row>
                </el-card>
            </el-col>
        </el-row>

        <el-row :gutter="15">
            <el-col :md="24" :xs="24">
                <el-card shadow="hover" style="margin-bottom:15px;">
                    <template #header>
                        <span>PHP及环境信息</span>
                    </template>
                    <div class="table">
                        <table cellspacing="0" style="width: 100%;">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="cell">操作系统</div>
                                </td>
                                <td>
                                    <div class="cell">@{{ envInfo.os }}</div>
                                </td>
                                <td>
                                    <div class="cell">PHP版本</div>
                                </td>
                                <td>
                                    <div class="cell">@{{ envInfo.php_version }}</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="cell">Laravel版本</div>
                                </td>
                                <td>
                                    <div class="cell">@{{ envInfo.laravel_version }}</div>
                                </td>
                                <td>
                                    <div class="cell">Dcat Admin版本</div>
                                </td>
                                <td>
                                    <div class="cell">@{{ envInfo.dcat_admin_version }}</div>
                                </td>
                            </tr>
                            <tr>
{{--                                <td>--}}
{{--                                    <div class="cell">MineAdmin版本</div>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <div class="cell">1</div>--}}
{{--                                </td>--}}
                                <td>
                                    <div class="cell">系统物理路径</div>
                                </td>
                                <td>
                                    <div class="cell">@{{ envInfo.project_path }}</div>
                                </td>
                            </tr>
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <div class="cell">系统启动时间</div>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <div class="cell">1</div>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <div class="cell">系统运行时间</div>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <div class="cell">1</div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
                            <tr>
                                <td>
                                    <div class="cell">磁盘信息</div>
                                </td>
                                <td colspan="3">
                                    <div class="cell">
                                        总空间：@{{ diskInfo.total }}
                                        <el-divider direction="vertical"></el-divider>
                                        已使用：@{{ diskInfo.usage }}
                                        <el-divider direction="vertical"></el-divider>
                                        已剩余：@{{ diskInfo.free }}
                                        <el-divider direction="vertical"></el-divider>
                                        使用率：@{{ diskInfo.rate }}
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </el-card>
            </el-col>
        </el-row>

        <el-row :gutter="15">
            <el-col :md="24" :xs="24">
                <el-card shadow="hover">
                    <template #header>
                        <span>网络I/O数据</span>
                    </template>
                    <div class="table">
                        <table cellspacing="0" style="width: 100%;">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="cell">接收总大小</div>
                                </td>
                                <td>
                                    <div class="cell">@{{ netInfo.receive_total }}M</div>
                                </td>
                                <td>
                                    <div class="cell">当前接收包大小</div>
                                </td>
                                <td>
                                    <div class="cell">@{{ netInfo.receive_pack }}K</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="cell">发送总大小</div>
                                </td>
                                <td>
                                    <div class="cell">@{{ netInfo.send_total }}M</div>
                                </td>
                                <td>
                                    <div class="cell">当前发送包大小</div>
                                </td>
                                <td>
                                    <div class="cell">@{{ netInfo.send_pack }}K</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </el-card>
            </el-col>
        </el-row>
    </div>
</div>

<script>
    Dcat.ready(function () {
        new Vue({
            el: '#app1',
            data: function () {
                return {
                    // CPU 信息
                    cpuInfo: {},
                    // 内存信息
                    memoryInfo: {},
                    envInfo: {},
                    diskInfo: {},
                    netInfo: {},
                    cpuOption: {
                        tooltip: {
                            formatter: '{a} <br/>{b} : {c}%'
                        },
                        series: [
                            {
                                name: 'Pressure',
                                type: 'gauge',
                                progress: {
                                    show: true
                                },
                                detail: {
                                    valueAnimation: true,
                                    formatter: '{value}'
                                },
                                data: [
                                    {
                                        value: 50,
                                        name: '使用率'
                                    }
                                ]
                            }
                        ]
                    },
                    memoryOption: {
                        series: [
                            {
                                type: 'gauge',
                                startAngle: 90,
                                endAngle: -270,
                                pointer: {
                                    show: false
                                },
                                progress: {
                                    show: true,
                                    overlap: false,
                                    roundCap: true,
                                    clip: false,
                                    itemStyle: {
                                        borderWidth: 1,
                                        borderColor: '#464646'
                                    }
                                },
                                axisLine: {
                                    lineStyle: {
                                        width: 20
                                    }
                                },
                                splitLine: {
                                    show: false,
                                    distance: 0,
                                    length: 10
                                },
                                axisTick: {
                                    show: false
                                },
                                axisLabel: {
                                    show: false,
                                    distance: 50
                                },
                                data: [{
                                    value: 60,
                                    // name: '使用率',
                                    // title: {
                                    //     offsetCenter: ['0%', '0%']
                                    // },
                                    detail: {
                                        valueAnimation: true,
                                        offsetCenter: ['0%', '0%']
                                    }
                                }],
                                title: {
                                    fontSize: 14
                                },
                                detail: {
                                    width: 50,
                                    height: 14,
                                    fontSize: 14,
                                    color: 'auto',
                                    borderColor: 'auto',
                                    borderRadius: 20,
                                    borderWidth: 1,
                                    formatter: '{value}%'
                                }
                            }
                        ]
                    }
                }
            },
            created() {
                console.log('created')
            },
            mounted() {
                console.log('mounted');

                axios.get('server/getNetInfo').then((response) => {
                    this.netInfo = response.data
                })

                axios.get('server/getPhpAndEnvInfo').then((response) => {
                    this.envInfo = response.data
                })

                axios.get('server/getDiskInfo').then((response) => {
                    this.diskInfo = response.data
                })

                axios.get('server/getCpuInfo').then((response) => {
                    this.cpuInfo = response.data
                    this.cpuOption.series[0].data[0].value = this.cpuInfo.usage

                    let cpuChart = echarts.init(document.getElementById("cpuEcharts"));
                    cpuChart.setOption(this.cpuOption);
                })

                axios.get('server/getMemInfo').then((response) => {
                    this.memoryInfo = response.data
                    this.memoryOption.series[0].data[0].value = this.memoryInfo.rate

                    let memoryChart = echarts.init(document.getElementById("memoryEcharts"));
                    memoryChart.setOption(this.memoryOption);
                })
            }
        })
    })
</script>

<style>
    .progress {
        left: 50%;
        margin-left: -120px;
    }

    :deep(.el-progress__text span) {
        font-size: 32px;
    }

    .table tbody tr {
        font-size: 14px;
        color: #606266;
    }

    .table tbody td {
        box-sizing: border-box;
        text-overflow: ellipsis;
        text-align: left;
        vertical-align: middle;
        position: relative;
        border-bottom: 1px solid #ebeef5;
        padding: 10px 0;
    }
</style>
