<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="about_div" style="width: 98%; margin-top: 5px; height: auto; overflow: hidden; background-image: url('../images/IMG_20180604_130426.jpg');">
    <div id="inner_abot_div" style=" height: auto; overflow-x: hidden; width: 99.9%; border: 1px solid black">
        <div style=" border: 1px dashed black; width: 100%; height: auto;">
            <div style=" background-color: #666; color: white; width: 100%;">
                <span id="about_span">

                </span>
            </div>
            
        </div>
        <div style=" opacity: 1; border: 1px dashed black; width: 100%; height: auto; min-height: 300px; overflow-x: hidden;">
            <div style=" background-color: #333; color: white; width: 100%;">
                <span >
                    About developers
                </span>
            </div>
            <div>
                <table style=" width: 100%; background-color: #ffd8d0; overflow-x: hidden;">
                    <tbody style=" font-size: 12pt">
                        <tr style=" text-align: center;">
                            <td>
                                <div style=" opacity: 1;">
                                    <img src="../Files/Attached/D1.jpg" alt="Dev_1 Picture" style=" width:250px; height: 300px" />
                                    <span style=" opacity: 1; background-color: #ffd8d0; font-weight: bolder;">
                                        WONDEMU TOMA
                                    </span>
                                </div>

                            </td>
                            <td>
                                <div style=" opacity: 1;">
                                    <img src="../Files/Attached/D3.jpg" alt="Dev_1 Picture" style=" width:250px; height: 300px" />
                                    <span style=" opacity: 1; background-color: #ffd8d0; font-weight: bolder;">
                                        ADDISU AGAJE
                                    </span>
                                </div>

                            </td>
                            <td>
                                <div style=" opacity: 1;">
                                    <img src="../Files/Attached/D2.jpg" alt="Dev_1 Picture" style=" width:250px; height: 300px" />
                                    <span style=" opacity: 1; background-color: #ffd8d0; font-weight: bolder;">
                                        GETAYE TEMESGEN
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $("#about_span").load('../includes/about.txt');
    </script>
</div>