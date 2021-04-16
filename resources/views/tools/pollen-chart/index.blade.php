@extends('adminlte::page')

@section('title', 'Pollen Colour Chart')

@section('adminlte_css_pre')
    <link href="{{ asset('/css/pollenchart.css') }}" rel="stylesheet">
@stop

@section('content_header')
    <div class="row">
        <div class="col-12">
            <h1 class="m-0 text-dark">Pollen Colour Chart</h1>
        </div>
    </div>
@stop

@include('partials._sidebar')

@section('content')
    <div class="row">
        <div class="col-12">
            <p>
                Move your mouse courser over the table below to see what plant the pollen colour relates to.
            </p>

            <input id="pollenname" size="40" type="text" value="#FFFFFF" style="border: 25px solid #666666; font-weight: bold; font-size: 20px; height: 100px;"/>


            <table cellspacing="2px" cellpadding="0" border="0" bgcolor="#FFFFFF" style="border:solid 0px #F0F0F0;padding:0px; width: 0px;">
                <tr>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Oriental Poppy" onmouseover="setPollen('Oriental Poppy', '#212423')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#212423"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Red Horse Chestnut" onmouseover="setPollen('Red Horse Chestnut', '#3c2724')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#3c2724"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="White Horse Chestnut" onmouseover="setPollen('White Horse Chestnut', '#5b2722')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#5b2722"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Lupin" onmouseover="setPollen('Lupin', '#6c2d23')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#6c2d23"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Red Deadnettle" onmouseover="setPollen('Red Deadnettle', '#7b2028')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#7b2028"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Gorse" onmouseover="setPollen('Gorse', '#bf453b')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#bf453b"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Copper Beech or Broom" onmouseover="setPollen('Copper Beech or Broom', '#d34d30')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#d34d30"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Field Scabious" onmouseover="setPollen('Field Scabious', '#f9563f')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#f9563f"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Rockrose" onmouseover="setPollen('Rockrose', '#f94027')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#f94027"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Asparagus" onmouseover="setPollen('Asparagus', '#fa5a22')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#fa5a22"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Snowdrop" onmouseover="setPollen('Snowdrop', '#fa4723')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#fa4723"></div>
                        </a>
                    </td>

                </tr>




                <tr>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Vipers Bugloss" onmouseover="setPollen('Vipers Bugloss', '#1d2d33')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#1d2d33"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Gooseberry" onmouseover="setPollen('Gooseberry', '#614425')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#614425"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Red and White Clover" onmouseover="setPollen('Red and White Clover', '#503225')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#503225"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Sycamore or Ash" onmouseover="setPollen('Sycamore or Ash', '#8c6124')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#8c6124"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Blackthorn or Almond" onmouseover="setPollen('Blackthorn or Almond', '#a03128')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#a03128"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Yew" onmouseover="setPollen('Yew', '#e86e30')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#e86e30"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Plum or Wild Cherry" onmouseover="setPollen('Plum or Wild Cherry', '#ce4e27')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#ce4e27"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Yellow Crocus" onmouseover="setPollen('Yellow Crocus', '#fc8a13')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#fc8a13"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Dandelion" onmouseover="setPollen('Dandelion', '#fa5a21')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#fa5a21"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Common Lime" onmouseover="setPollen('Common Lime', '#f47b1d')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#f47b1d"></div>
                        </a>
                    </td>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Buttercup or Mustard" onmouseover="setPollen('Buttercup or Mustard', '#f17e19')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#f17e19"></div>
                        </a>
                    </td>

                </tr>




                <tr>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Rosebay Willow Herb" onmouseover="setPollen('Rosebay Willow Herb', '#084d3c')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#084d3c"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Winter Heath" onmouseover="setPollen('Winter Heath', '#9a673f')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#9a673f"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Field Bean" onmouseover="setPollen('Field Bean', '#916123')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#916123"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Lauristus" onmouseover="setPollen('Lauristus', '#9b7e23')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#9b7e23"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Ling Heather" onmouseover="setPollen('Ling Heather', '#c58646')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#c58646"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Flowering Currant" onmouseover="setPollen('Flowering Currant', '#b68644')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#b68644"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Apple or Cabbage" onmouseover="setPollen('Apple or Cabbage', '#fc8a13')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#fc8a13"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Ivy" onmouseover="setPollen('Ivy', '#fea722')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#fea722"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Willow" onmouseover="setPollen('Willow', '#f1911c')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#f1911c"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Blue Crocus" onmouseover="setPollen('Blue Crocus', '#fba11a')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#fba11a"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Poplar" onmouseover="setPollen('Poplar', '#fba11a')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#fba11a"></div>
                        </a>
                    </td>



                </tr>

                <tr>


                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="False Acacia" onmouseover="setPollen('False Acacia', '#5a4b25')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#5a4b25"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Berberis" onmouseover="setPollen('Berberis', '#7b6623')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#7b6623"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Marjoram" onmouseover="setPollen('Marjoram', '#a07234')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#a07234"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Meadowsweet" onmouseover="setPollen('Meadowsweet', '#7c9028')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#7c9028"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Wallflower" onmouseover="setPollen('Wallflower', '#c0842f')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#c0842f"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Onion" onmouseover="setPollen('Onion', '#d5af20')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#d5af20"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Knapweed or Borage" onmouseover="setPollen('Knapweed or Borage', '#ebae56')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#ebae56"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Wild Bluebell or Plantain" onmouseover="setPollen('Wild Bluebell or Plantain', '#e6bd29')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#e6bd29"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Laurel" onmouseover="setPollen('Laurel', '#f0b241')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#f0b241"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Broccoli" onmouseover="setPollen('Broccoli', '#faaa00')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#faaa00"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Box" onmouseover="setPollen('Box', '#f9901c')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#f9901c"></div>
                        </a>
                    </td>



                </tr>

                <tr>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Elm" onmouseover="setPollen('Elm', '#85674d')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#85674d"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="spring" title="Pear or Crab Apple" onmouseover="setPollen('Pear or Crab Apple', '#fba11a')" href="javascript:void(0)" >
                            <div class="spring" style="background-color:#fba11a"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Holly or Mountain Ash" onmouseover="setPollen('Holly or Mountain Ash', '#8a8128')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#8a8128"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Hawthorn or Oak" onmouseover="setPollen('Hawthorn or Oak', '#afa32f')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#afa32f"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Deadly Nightshade or Wild Honeysuckle" onmouseover="setPollen('Deadly Nightshade or Wild Honeysuckle', '#afab3a')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#afab3a"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Hairy Willowherb" onmouseover="setPollen('Hairy Willowherb', '#e5ce29')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#e5ce29"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Sweet Chestnut or Virginia Creeper" onmouseover="setPollen('Sweet Chestnut or Virginia Creeper', '#eab502')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#eab502"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Elder or Plantain" onmouseover="setPollen('Elder or Plantain', '#e3cc2a')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#e3cc2a"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Wild Honeysuckle" onmouseover="setPollen('Wild Honeysuckle', '#edc652')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#edc652"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Dogwood" onmouseover="setPollen('Dogwood', '#fbcc00')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#fbcc00"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Californian Poppy" onmouseover="setPollen('Californian Poppy', '#fe9811')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#fe9811"></div>
                        </a>
                    </td>



                </tr>


                <tr>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Broadbean" onmouseover="setPollen('Broadbean', '#7d825a')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#7d825a"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Blackberry" onmouseover="setPollen('Blackberry', '#ad994e')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#ad994e"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Traveller Joy" onmouseover="setPollen('Traveller Joy', '#9e9734')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#9e9734"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Bell Heath" onmouseover="setPollen('Bell Heath', '#abb565')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#abb565"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Field Thistle" onmouseover="setPollen('Field Thistle', '#dbd481')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#dbd481"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Himalayan Balsam" onmouseover="setPollen('Himalayan Balsam', '#e8d8a2')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#e8d8a2"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Common Beech or Lilac" onmouseover="setPollen('Common Beech or Lilac', '#dfcd32')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#dfcd32"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Privet" onmouseover="setPollen('Privet', '#e7ce00')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#e7ce00"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Evening Primrose" onmouseover="setPollen('Evening Primrose', '#e4ce22')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#e4ce22"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Oil Seed Rape" onmouseover="setPollen('Oil Seed Rape', '#f8c900')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#f8c900"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="autumn" title="Hogweed" onmouseover="setPollen('Hogweed', '#fcc500')" href="javascript:void(0)" >
                            <div class="autumn" style="background-color:#fcc500"></div>
                        </a>
                    </td>



                </tr>

                <tr>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Raspberry" onmouseover="setPollen('Raspberry', '#aaac83')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#aaac83"></div>
                        </a>
                    </td>

                    <td style="padding: 0px; margin: 0px;">
                        <a class="summer" title="Hazel or Elder" onmouseover="setPollen('Hazel or Elder', '#ced5d5')" href="javascript:void(0)" >
                            <div class="summer" style="background-color:#ced5d5"></div>
                        </a>
                    </td>

                </tr>

            </table>

            <p>Use these controls to toggle on/off the different seasons:</p>

            <a id="son" onclick="javascript:this.style.color='red';document.getElementById('soff').style.color='grey';setStyleByClass('*', 'spring', 'visibility', 'visible')" href="javascript:void(0)" >SPRING ON</a>&nbsp;&nbsp;
            <a id="soff" onclick="javascript:this.style.color='red';document.getElementById('son').style.color='grey';setStyleByClass('*', 'spring', 'visibility', 'hidden')" href="javascript:void(0)" >SPRING OFF</a>
            <br/><br/>

            <a id="suon" onclick="javascript:this.style.color='red';document.getElementById('suoff').style.color='grey';setStyleByClass('*', 'summer', 'visibility', 'visible')"  href="javascript:void(0)">SUMMER ON</a>&nbsp;&nbsp;
            <a id="suoff" onclick="javascript:this.style.color='red';document.getElementById('suon').style.color='grey';setStyleByClass('*', 'summer', 'visibility', 'hidden')" href="javascript:void(0)">SUMMER OFF</a>
            <br/><br/>

            <a id="aon" onclick="javascript:this.style.color='red';document.getElementById('aoff').style.color='grey';setStyleByClass('*', 'autumn', 'visibility', 'visible')" href="javascript:void(0)">AUTUMN ON</a>&nbsp;&nbsp;
            <a id="aoff" onclick="javascript:this.style.color='red';document.getElementById('aon').style.color='grey';setStyleByClass('*', 'autumn', 'visibility', 'hidden')" href="javascript:void(0)">AUTUMN OFF</a>
            <br/><br/>
        </div><!-- .entry-content -->
    </div>
@stop

@section('adminlte_js')
    <script src="{{ asset('/js/pollenchart.js') }}"></script>
@stop

@section('footer')
    @include('partials._footer')
@stop







