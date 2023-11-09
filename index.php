<?php
$area = "home";
include "include/header.php";
?>

<div id="slideshow">
    <h1 style="opacity: 0; pointer-events: none; max-height: 0;">V21 - Centro de Incubação Tecnológico de Viseu</h1>
    <div class="wrapper">
        <div class="slides">
            <?php
            $slideshow_query = "SELECT * FROM slideshow_home order by display_order asc ";

            $result_s = mysqli_query($conn, $slideshow_query);
            $slideshow = array();

            while ($row_s = mysqli_fetch_assoc($result_s)) {
                $slideshow[] = $row_s;
            }

            foreach ($slideshow as $s) {

                $s['display_order'] == 0 ? $active = 'active' : $active = '';

                if ($s['display_order'] % 2 !== 0) {
                    $position = 'left';
                    $style = "left: -.1%; transform: scaleX(-1);";
                    $svg = '<defs>
                                <mask id="clip2">
                                    <g id="bg" fill="#ffffff">
                                        <path class="cl1" d="M640.57,222.6c141.4,0,269.1,66.1,359.6,172.2V0H0V1080H222.17c-49.9-86.8-78.9-190-78.9-300.9C143.27,471.7,365.87,222.6,640.57,222.6Z" />
                                    </g>
                                </mask>
                            </defs>
                            <g id="bg" fill="#ffffff">
                                <path d="M640.57,222.6c141.4,0,269.1,66.1,359.6,172.2V0H0V1080H222.17c-49.9-86.8-78.9-190-78.9-300.9C143.27,471.7,365.87,222.6,640.57,222.6Z" />
                            </g>
                            <g mask="url(#clip2)">
                                <g id="dots" class="cls2">
                                    <g id="Grupo_1094" data-name="Grupo 1094">
                                        <circle id="Elipse_67" data-name="Elipse 67" class="cls3" cx="25.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_68" data-name="Elipse 68" class="cls3" cx="60.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_69" data-name="Elipse 69" class="cls3" cx="94.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_70" data-name="Elipse 70" class="cls3" cx="129.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_71" data-name="Elipse 71" class="cls3" cx="163.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_72" data-name="Elipse 72" class="cls3" cx="198.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_73" data-name="Elipse 73" class="cls3" cx="233.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_74" data-name="Elipse 74" class="cls3" cx="267.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_75" data-name="Elipse 75" class="cls3" cx="302.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_76" data-name="Elipse 76" class="cls3" cx="336.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_77" data-name="Elipse 77" class="cls3" cx="371.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_78" data-name="Elipse 78" class="cls3" cx="405.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_79" data-name="Elipse 79" class="cls3" cx="440.17" cy="520.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1095" data-name="Grupo 1095">
                                        <circle id="Elipse_67-2" data-name="Elipse 67-2" class="cls3" cx="25.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_68-2" data-name="Elipse 68-2" class="cls3" cx="60.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_69-2" data-name="Elipse 69-2" class="cls3" cx="94.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_70-2" data-name="Elipse 70-2" class="cls3" cx="129.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_71-2" data-name="Elipse 71-2" class="cls3" cx="163.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_72-2" data-name="Elipse 72-2" class="cls3" cx="198.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_73-2" data-name="Elipse 73-2" class="cls3" cx="233.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_74-2" data-name="Elipse 74-2" class="cls3" cx="267.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_75-2" data-name="Elipse 75-2" class="cls3" cx="302.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_76-2" data-name="Elipse 76-2" class="cls3" cx="336.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_77-2" data-name="Elipse 77-2" class="cls3" cx="371.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_78-2" data-name="Elipse 78-2" class="cls3" cx="405.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_79-2" data-name="Elipse 79-2" class="cls3" cx="440.17" cy="562.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1096" data-name="Grupo 1096">
                                        <circle id="Elipse_67-3" data-name="Elipse 67-3" class="cls3" cx="25.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_68-3" data-name="Elipse 68-3" class="cls3" cx="60.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_69-3" data-name="Elipse 69-3" class="cls3" cx="94.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_70-3" data-name="Elipse 70-3" class="cls3" cx="129.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_71-3" data-name="Elipse 71-3" class="cls3" cx="163.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_72-3" data-name="Elipse 72-3" class="cls3" cx="198.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_73-3" data-name="Elipse 73-3" class="cls3" cx="233.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_74-3" data-name="Elipse 74-3" class="cls3" cx="267.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_75-3" data-name="Elipse 75-3" class="cls3" cx="302.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_76-3" data-name="Elipse 76-3" class="cls3" cx="336.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_77-3" data-name="Elipse 77-3" class="cls3" cx="371.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_78-3" data-name="Elipse 78-3" class="cls3" cx="405.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_79-3" data-name="Elipse 79-3" class="cls3" cx="440.17" cy="603.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1097" data-name="Grupo 1097">
                                        <circle id="Elipse_67-4" data-name="Elipse 67-4" class="cls3" cx="25.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_68-4" data-name="Elipse 68-4" class="cls3" cx="60.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_69-4" data-name="Elipse 69-4" class="cls3" cx="94.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_70-4" data-name="Elipse 70-4" class="cls3" cx="129.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_71-4" data-name="Elipse 71-4" class="cls3" cx="163.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_72-4" data-name="Elipse 72-4" class="cls3" cx="198.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_73-4" data-name="Elipse 73-4" class="cls3" cx="233.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_74-4" data-name="Elipse 74-4" class="cls3" cx="267.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_75-4" data-name="Elipse 75-4" class="cls3" cx="302.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_76-4" data-name="Elipse 76-4" class="cls3" cx="336.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_77-4" data-name="Elipse 77-4" class="cls3" cx="371.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_78-4" data-name="Elipse 78-4" class="cls3" cx="405.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_79-4" data-name="Elipse 79-4" class="cls3" cx="440.17" cy="645.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1098" data-name="Grupo 1098">
                                        <circle id="Elipse_67-5" data-name="Elipse 67-5" class="cls3" cx="25.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_68-5" data-name="Elipse 68-5" class="cls3" cx="60.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_69-5" data-name="Elipse 69-5" class="cls3" cx="94.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_70-5" data-name="Elipse 70-5" class="cls3" cx="129.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_71-5" data-name="Elipse 71-5" class="cls3" cx="163.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_72-5" data-name="Elipse 72-5" class="cls3" cx="198.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_73-5" data-name="Elipse 73-5" class="cls3" cx="233.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_74-5" data-name="Elipse 74-5" class="cls3" cx="267.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_75-5" data-name="Elipse 75-5" class="cls3" cx="302.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_76-5" data-name="Elipse 76-5" class="cls3" cx="336.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_77-5" data-name="Elipse 77-5" class="cls3" cx="371.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_78-5" data-name="Elipse 78-5" class="cls3" cx="405.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_79-5" data-name="Elipse 79-5" class="cls3" cx="440.17" cy="686.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1099" data-name="Grupo 1099">
                                        <circle id="Elipse_67-6" data-name="Elipse 67-6" class="cls3" cx="25.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_68-6" data-name="Elipse 68-6" class="cls3" cx="60.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_69-6" data-name="Elipse 69-6" class="cls3" cx="94.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_70-6" data-name="Elipse 70-6" class="cls3" cx="129.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_71-6" data-name="Elipse 71-6" class="cls3" cx="163.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_72-6" data-name="Elipse 72-6" class="cls3" cx="198.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_73-6" data-name="Elipse 73-6" class="cls3" cx="233.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_74-6" data-name="Elipse 74-6" class="cls3" cx="267.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_75-6" data-name="Elipse 75-6" class="cls3" cx="302.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_76-6" data-name="Elipse 76-6" class="cls3" cx="336.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_77-6" data-name="Elipse 77-6" class="cls3" cx="371.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_78-6" data-name="Elipse 78-6" class="cls3" cx="405.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_79-6" data-name="Elipse 79-6" class="cls3" cx="440.17" cy="728.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1100" data-name="Grupo 1100">
                                        <circle id="Elipse_67-7" data-name="Elipse 67-7" class="cls3" cx="25.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_68-7" data-name="Elipse 68-7" class="cls3" cx="60.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_69-7" data-name="Elipse 69-7" class="cls3" cx="94.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_70-7" data-name="Elipse 70-7" class="cls3" cx="129.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_71-7" data-name="Elipse 71-7" class="cls3" cx="163.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_72-7" data-name="Elipse 72-7" class="cls3" cx="198.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_73-7" data-name="Elipse 73-7" class="cls3" cx="233.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_74-7" data-name="Elipse 74-7" class="cls3" cx="267.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_75-7" data-name="Elipse 75-7" class="cls3" cx="302.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_76-7" data-name="Elipse 76-7" class="cls3" cx="336.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_77-7" data-name="Elipse 77-7" class="cls3" cx="371.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_78-7" data-name="Elipse 78-7" class="cls3" cx="405.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_79-7" data-name="Elipse 79-7" class="cls3" cx="440.17" cy="769.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1101" data-name="Grupo 1101">
                                        <circle id="Elipse_67-8" data-name="Elipse 67-8" class="cls3" cx="25.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_68-8" data-name="Elipse 68-8" class="cls3" cx="60.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_69-8" data-name="Elipse 69-8" class="cls3" cx="94.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_70-8" data-name="Elipse 70-8" class="cls3" cx="129.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_71-8" data-name="Elipse 71-8" class="cls3" cx="163.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_72-8" data-name="Elipse 72-8" class="cls3" cx="198.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_73-8" data-name="Elipse 73-8" class="cls3" cx="233.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_74-8" data-name="Elipse 74-8" class="cls3" cx="267.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_75-8" data-name="Elipse 75-8" class="cls3" cx="302.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_76-8" data-name="Elipse 76-8" class="cls3" cx="336.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_77-8" data-name="Elipse 77-8" class="cls3" cx="371.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_78-8" data-name="Elipse 78-8" class="cls3" cx="405.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_79-8" data-name="Elipse 79-8" class="cls3" cx="440.17" cy="811.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1102" data-name="Grupo 1102">
                                        <circle id="Elipse_67-9" data-name="Elipse 67-9" class="cls3" cx="25.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_68-9" data-name="Elipse 68-9" class="cls3" cx="60.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_69-9" data-name="Elipse 69-9" class="cls3" cx="94.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_70-9" data-name="Elipse 70-9" class="cls3" cx="129.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_71-9" data-name="Elipse 71-9" class="cls3" cx="163.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_72-9" data-name="Elipse 72-9" class="cls3" cx="198.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_73-9" data-name="Elipse 73-9" class="cls3" cx="233.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_74-9" data-name="Elipse 74-9" class="cls3" cx="267.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_75-9" data-name="Elipse 75-9" class="cls3" cx="302.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_76-9" data-name="Elipse 76-9" class="cls3" cx="336.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_77-9" data-name="Elipse 77-9" class="cls3" cx="371.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_78-9" data-name="Elipse 78-9" class="cls3" cx="405.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_79-9" data-name="Elipse 79-9" class="cls3" cx="440.17" cy="852.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1103" data-name="Grupo 1103">
                                        <circle id="Elipse_67-10" data-name="Elipse 67-10" class="cls3" cx="25.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_68-10" data-name="Elipse 68-10" class="cls3" cx="60.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_69-10" data-name="Elipse 69-10" class="cls3" cx="94.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_70-10" data-name="Elipse 70-10" class="cls3" cx="129.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_71-10" data-name="Elipse 71-10" class="cls3" cx="163.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_72-10" data-name="Elipse 72-10" class="cls3" cx="198.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_73-10" data-name="Elipse 73-10" class="cls3" cx="233.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_74-10" data-name="Elipse 74-10" class="cls3" cx="267.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_75-10" data-name="Elipse 75-10" class="cls3" cx="302.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_76-10" data-name="Elipse 76-10" class="cls3" cx="336.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_77-10" data-name="Elipse 77-10" class="cls3" cx="371.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_78-10" data-name="Elipse 78-10" class="cls3" cx="405.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_79-10" data-name="Elipse 79-10" class="cls3" cx="440.17" cy="894.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1104" data-name="Grupo 1104">
                                        <circle id="Elipse_67-11" data-name="Elipse 67-11" class="cls3" cx="25.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_68-11" data-name="Elipse 68-11" class="cls3" cx="60.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_69-11" data-name="Elipse 69-11" class="cls3" cx="94.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_70-11" data-name="Elipse 70-11" class="cls3" cx="129.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_71-11" data-name="Elipse 71-11" class="cls3" cx="163.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_72-11" data-name="Elipse 72-11" class="cls3" cx="198.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_73-11" data-name="Elipse 73-11" class="cls3" cx="233.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_74-11" data-name="Elipse 74-11" class="cls3" cx="267.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_75-11" data-name="Elipse 75-11" class="cls3" cx="302.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_76-11" data-name="Elipse 76-11" class="cls3" cx="336.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_77-11" data-name="Elipse 77-11" class="cls3" cx="371.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_78-11" data-name="Elipse 78-11" class="cls3" cx="405.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_79-11" data-name="Elipse 79-11" class="cls3" cx="440.17" cy="935.1" r="4.5" />
                                    </g>
                                </g>
                                <ellipse class="right-circle cls4" cx="739.28" cy="427.04" rx="220.51" ry="302.51" transform="translate(156.86 1051.29) rotate(-77)" />
                                <ellipse class="left-circle cls4" cx="302.17" cy="710.1" rx="205.5" ry="207.5" />
                                <circle class="beige-circle cls5" cx="232.17" cy="1121.1" r="58.5" />
                            </g>';
                    $path = '';
                } else {
                    $position = 'right';
                    $style = "";
                    $svg = '<defs>
                                <mask id="clip1">
                                    <g id="bg" fill="#ffffff">
                                        <path d="M640.57,222.6c141.4,0,269.1,66.1,359.6,172.2V0H0V1080H222.17c-49.9-86.8-78.9-190-78.9-300.9C143.27,471.7,365.87,222.6,640.57,222.6Z"/>
                                    </g>
                                </mask>
                            </defs>
                            <g id="bg" fill="#ffffff">
                                <path d="M640.57,222.6c141.4,0,269.1,66.1,359.6,172.2V0H0V1080H222.17c-49.9-86.8-78.9-190-78.9-300.9C143.27,471.7,365.87,222.6,640.57,222.6Z"/>
                            </g>
                            <g mask="url(#clip1)">
                                <g id="dots" class="cls2">
                                    <g id="Grupo_1094" data-name="Grupo 1094">
                                        <circle id="Elipse_67" data-name="Elipse 67" class="cls3" cx="25.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_68" data-name="Elipse 68" class="cls3" cx="60.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_69" data-name="Elipse 69" class="cls3" cx="94.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_70" data-name="Elipse 70" class="cls3" cx="129.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_71" data-name="Elipse 71" class="cls3" cx="163.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_72" data-name="Elipse 72" class="cls3" cx="198.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_73" data-name="Elipse 73" class="cls3" cx="233.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_74" data-name="Elipse 74" class="cls3" cx="267.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_75" data-name="Elipse 75" class="cls3" cx="302.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_76" data-name="Elipse 76" class="cls3" cx="336.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_77" data-name="Elipse 77" class="cls3" cx="371.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_78" data-name="Elipse 78" class="cls3" cx="405.17" cy="520.1" r="4.5" />
                                        <circle id="Elipse_79" data-name="Elipse 79" class="cls3" cx="440.17" cy="520.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1095" data-name="Grupo 1095">
                                        <circle id="Elipse_67-2" data-name="Elipse 67-2" class="cls3" cx="25.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_68-2" data-name="Elipse 68-2" class="cls3" cx="60.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_69-2" data-name="Elipse 69-2" class="cls3" cx="94.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_70-2" data-name="Elipse 70-2" class="cls3" cx="129.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_71-2" data-name="Elipse 71-2" class="cls3" cx="163.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_72-2" data-name="Elipse 72-2" class="cls3" cx="198.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_73-2" data-name="Elipse 73-2" class="cls3" cx="233.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_74-2" data-name="Elipse 74-2" class="cls3" cx="267.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_75-2" data-name="Elipse 75-2" class="cls3" cx="302.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_76-2" data-name="Elipse 76-2" class="cls3" cx="336.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_77-2" data-name="Elipse 77-2" class="cls3" cx="371.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_78-2" data-name="Elipse 78-2" class="cls3" cx="405.17" cy="562.1" r="4.5" />
                                        <circle id="Elipse_79-2" data-name="Elipse 79-2" class="cls3" cx="440.17" cy="562.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1096" data-name="Grupo 1096">
                                        <circle id="Elipse_67-3" data-name="Elipse 67-3" class="cls3" cx="25.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_68-3" data-name="Elipse 68-3" class="cls3" cx="60.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_69-3" data-name="Elipse 69-3" class="cls3" cx="94.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_70-3" data-name="Elipse 70-3" class="cls3" cx="129.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_71-3" data-name="Elipse 71-3" class="cls3" cx="163.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_72-3" data-name="Elipse 72-3" class="cls3" cx="198.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_73-3" data-name="Elipse 73-3" class="cls3" cx="233.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_74-3" data-name="Elipse 74-3" class="cls3" cx="267.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_75-3" data-name="Elipse 75-3" class="cls3" cx="302.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_76-3" data-name="Elipse 76-3" class="cls3" cx="336.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_77-3" data-name="Elipse 77-3" class="cls3" cx="371.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_78-3" data-name="Elipse 78-3" class="cls3" cx="405.17" cy="603.1" r="4.5" />
                                        <circle id="Elipse_79-3" data-name="Elipse 79-3" class="cls3" cx="440.17" cy="603.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1097" data-name="Grupo 1097">
                                        <circle id="Elipse_67-4" data-name="Elipse 67-4" class="cls3" cx="25.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_68-4" data-name="Elipse 68-4" class="cls3" cx="60.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_69-4" data-name="Elipse 69-4" class="cls3" cx="94.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_70-4" data-name="Elipse 70-4" class="cls3" cx="129.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_71-4" data-name="Elipse 71-4" class="cls3" cx="163.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_72-4" data-name="Elipse 72-4" class="cls3" cx="198.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_73-4" data-name="Elipse 73-4" class="cls3" cx="233.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_74-4" data-name="Elipse 74-4" class="cls3" cx="267.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_75-4" data-name="Elipse 75-4" class="cls3" cx="302.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_76-4" data-name="Elipse 76-4" class="cls3" cx="336.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_77-4" data-name="Elipse 77-4" class="cls3" cx="371.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_78-4" data-name="Elipse 78-4" class="cls3" cx="405.17" cy="645.1" r="4.5" />
                                        <circle id="Elipse_79-4" data-name="Elipse 79-4" class="cls3" cx="440.17" cy="645.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1098" data-name="Grupo 1098">
                                        <circle id="Elipse_67-5" data-name="Elipse 67-5" class="cls3" cx="25.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_68-5" data-name="Elipse 68-5" class="cls3" cx="60.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_69-5" data-name="Elipse 69-5" class="cls3" cx="94.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_70-5" data-name="Elipse 70-5" class="cls3" cx="129.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_71-5" data-name="Elipse 71-5" class="cls3" cx="163.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_72-5" data-name="Elipse 72-5" class="cls3" cx="198.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_73-5" data-name="Elipse 73-5" class="cls3" cx="233.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_74-5" data-name="Elipse 74-5" class="cls3" cx="267.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_75-5" data-name="Elipse 75-5" class="cls3" cx="302.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_76-5" data-name="Elipse 76-5" class="cls3" cx="336.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_77-5" data-name="Elipse 77-5" class="cls3" cx="371.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_78-5" data-name="Elipse 78-5" class="cls3" cx="405.17" cy="686.1" r="4.5" />
                                        <circle id="Elipse_79-5" data-name="Elipse 79-5" class="cls3" cx="440.17" cy="686.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1099" data-name="Grupo 1099">
                                        <circle id="Elipse_67-6" data-name="Elipse 67-6" class="cls3" cx="25.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_68-6" data-name="Elipse 68-6" class="cls3" cx="60.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_69-6" data-name="Elipse 69-6" class="cls3" cx="94.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_70-6" data-name="Elipse 70-6" class="cls3" cx="129.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_71-6" data-name="Elipse 71-6" class="cls3" cx="163.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_72-6" data-name="Elipse 72-6" class="cls3" cx="198.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_73-6" data-name="Elipse 73-6" class="cls3" cx="233.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_74-6" data-name="Elipse 74-6" class="cls3" cx="267.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_75-6" data-name="Elipse 75-6" class="cls3" cx="302.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_76-6" data-name="Elipse 76-6" class="cls3" cx="336.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_77-6" data-name="Elipse 77-6" class="cls3" cx="371.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_78-6" data-name="Elipse 78-6" class="cls3" cx="405.17" cy="728.1" r="4.5" />
                                        <circle id="Elipse_79-6" data-name="Elipse 79-6" class="cls3" cx="440.17" cy="728.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1100" data-name="Grupo 1100">
                                        <circle id="Elipse_67-7" data-name="Elipse 67-7" class="cls3" cx="25.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_68-7" data-name="Elipse 68-7" class="cls3" cx="60.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_69-7" data-name="Elipse 69-7" class="cls3" cx="94.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_70-7" data-name="Elipse 70-7" class="cls3" cx="129.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_71-7" data-name="Elipse 71-7" class="cls3" cx="163.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_72-7" data-name="Elipse 72-7" class="cls3" cx="198.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_73-7" data-name="Elipse 73-7" class="cls3" cx="233.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_74-7" data-name="Elipse 74-7" class="cls3" cx="267.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_75-7" data-name="Elipse 75-7" class="cls3" cx="302.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_76-7" data-name="Elipse 76-7" class="cls3" cx="336.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_77-7" data-name="Elipse 77-7" class="cls3" cx="371.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_78-7" data-name="Elipse 78-7" class="cls3" cx="405.17" cy="769.1" r="4.5" />
                                        <circle id="Elipse_79-7" data-name="Elipse 79-7" class="cls3" cx="440.17" cy="769.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1101" data-name="Grupo 1101">
                                        <circle id="Elipse_67-8" data-name="Elipse 67-8" class="cls3" cx="25.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_68-8" data-name="Elipse 68-8" class="cls3" cx="60.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_69-8" data-name="Elipse 69-8" class="cls3" cx="94.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_70-8" data-name="Elipse 70-8" class="cls3" cx="129.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_71-8" data-name="Elipse 71-8" class="cls3" cx="163.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_72-8" data-name="Elipse 72-8" class="cls3" cx="198.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_73-8" data-name="Elipse 73-8" class="cls3" cx="233.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_74-8" data-name="Elipse 74-8" class="cls3" cx="267.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_75-8" data-name="Elipse 75-8" class="cls3" cx="302.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_76-8" data-name="Elipse 76-8" class="cls3" cx="336.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_77-8" data-name="Elipse 77-8" class="cls3" cx="371.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_78-8" data-name="Elipse 78-8" class="cls3" cx="405.17" cy="811.1" r="4.5" />
                                        <circle id="Elipse_79-8" data-name="Elipse 79-8" class="cls3" cx="440.17" cy="811.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1102" data-name="Grupo 1102">
                                        <circle id="Elipse_67-9" data-name="Elipse 67-9" class="cls3" cx="25.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_68-9" data-name="Elipse 68-9" class="cls3" cx="60.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_69-9" data-name="Elipse 69-9" class="cls3" cx="94.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_70-9" data-name="Elipse 70-9" class="cls3" cx="129.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_71-9" data-name="Elipse 71-9" class="cls3" cx="163.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_72-9" data-name="Elipse 72-9" class="cls3" cx="198.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_73-9" data-name="Elipse 73-9" class="cls3" cx="233.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_74-9" data-name="Elipse 74-9" class="cls3" cx="267.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_75-9" data-name="Elipse 75-9" class="cls3" cx="302.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_76-9" data-name="Elipse 76-9" class="cls3" cx="336.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_77-9" data-name="Elipse 77-9" class="cls3" cx="371.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_78-9" data-name="Elipse 78-9" class="cls3" cx="405.17" cy="852.1" r="4.5" />
                                        <circle id="Elipse_79-9" data-name="Elipse 79-9" class="cls3" cx="440.17" cy="852.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1103" data-name="Grupo 1103">
                                        <circle id="Elipse_67-10" data-name="Elipse 67-10" class="cls3" cx="25.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_68-10" data-name="Elipse 68-10" class="cls3" cx="60.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_69-10" data-name="Elipse 69-10" class="cls3" cx="94.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_70-10" data-name="Elipse 70-10" class="cls3" cx="129.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_71-10" data-name="Elipse 71-10" class="cls3" cx="163.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_72-10" data-name="Elipse 72-10" class="cls3" cx="198.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_73-10" data-name="Elipse 73-10" class="cls3" cx="233.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_74-10" data-name="Elipse 74-10" class="cls3" cx="267.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_75-10" data-name="Elipse 75-10" class="cls3" cx="302.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_76-10" data-name="Elipse 76-10" class="cls3" cx="336.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_77-10" data-name="Elipse 77-10" class="cls3" cx="371.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_78-10" data-name="Elipse 78-10" class="cls3" cx="405.17" cy="894.1" r="4.5" />
                                        <circle id="Elipse_79-10" data-name="Elipse 79-10" class="cls3" cx="440.17" cy="894.1" r="4.5" />
                                    </g>
                                    <g id="Grupo_1104" data-name="Grupo 1104">
                                        <circle id="Elipse_67-11" data-name="Elipse 67-11" class="cls3" cx="25.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_68-11" data-name="Elipse 68-11" class="cls3" cx="60.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_69-11" data-name="Elipse 69-11" class="cls3" cx="94.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_70-11" data-name="Elipse 70-11" class="cls3" cx="129.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_71-11" data-name="Elipse 71-11" class="cls3" cx="163.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_72-11" data-name="Elipse 72-11" class="cls3" cx="198.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_73-11" data-name="Elipse 73-11" class="cls3" cx="233.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_74-11" data-name="Elipse 74-11" class="cls3" cx="267.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_75-11" data-name="Elipse 75-11" class="cls3" cx="302.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_76-11" data-name="Elipse 76-11" class="cls3" cx="336.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_77-11" data-name="Elipse 77-11" class="cls3" cx="371.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_78-11" data-name="Elipse 78-11" class="cls3" cx="405.17" cy="935.1" r="4.5" />
                                        <circle id="Elipse_79-11" data-name="Elipse 79-11" class="cls3" cx="440.17" cy="935.1" r="4.5" />
                                    </g>
                                </g>
                                <ellipse class="right-circle cls4" cx="739.28" cy="427.04" rx="220.51" ry="302.51" transform="translate(156.86 1051.29) rotate(-77)" />
                                <ellipse class="left-circle cls4" cx="302.17" cy="710.1" rx="205.5" ry="207.5" />
                                <circle class="beige-circle cls5" cx="232.17" cy="1121.1" r="58.5" />
                            </g>';
                    $path = '';
                }
            ?>

                <div class="slide <?php echo $position; ?> <?php echo $active; ?>" data-position='<?php echo $position ?>' data-slide-id="<?php echo $s['display_order'] + 1 ?>">
                    <div class="bg">
                        <img class="<?php echo $s['img_align']; ?>" src="<?php echo $s['img_src']; ?>" alt="<?php echo $s['title']; ?>">
                        <svg style="<?php echo $style; ?>" version="1.1" xmlns="http:www.w3.org/2000/svg" xmlns:xlink="http:www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000.17 1080">
                            <style type="text/css">
                                .cls1{fill:#fff;}.cls2{opacity:0.46;}.cls3{fill:#b6b8bd;}.cls4{fill:#f4f5fa;}.cls5{fill:#fddfdf;}
                            </style>
                            <?php echo $svg; ?>
                        </svg>
                    </div>
                    <div class="path">
                        <svg xmlns="http:www.w3.org/2000/svg" width="519" height="325.484" viewBox="0 0 519 325.5">
                            <defs>
                                <style>
                                    .cls-1,
                                    .cls-3 {
                                        fill: none;
                                        stroke: rgb(0, 145, 157);
                                        stroke-linecap: round;
                                        stroke-miterlimit: 10;
                                        stroke-width: 9px;
                                    }

                                    .cls-1 {
                                        stroke-dasharray: 15 27;
                                    }
                                </style>
                            </defs>
                            <polyline class="cls-1 path-lines" points="4.3 4.3 134.5 139.2 152 157.4 163.8 169.6 181.2 187.6 193.8 200.8 211.3 218.9 214.2 221.9 214.2 234.9 214.3 260.4 214.3 277 214.4 302.8 214.4 319.9" />
                            <polyline class="cls-1 path-lines" points="307.9 249.9 329.4 250.2 356.2 250.7 371.9 251 399.8 251.4 414.5 251.7 440.7 252.1 445.4 252.2 454.6 261.4 472 278.7 484.6 291.3 502.4 309.2 514.9 321.6" />
                            <polyline class="cls-1 path-lines" points="58 245.6 74 245.9 100.9 246.4 116.6 246.6 144.1 247.1 157.9 247.3 186 247.8 202 248.1 228.6 248.5 251.4 248.9" />
                            <circle class="cls-3" cx="279.6" cy="250.1" r="28.3" />
                        </svg>
                    </div>
                    <div class="left">
                        <h3 class="desc">
                            <?php //echo $_SESSION['language_id'] == 1 ? $s['title'] : $s['title_en']; ?>
                            <?php 
                            if($_SESSION['language_id'] == 1){
                                echo $s['title'];
                            } else {
                                if($s['title_en'] == ''){
                                    echo $s['title'];
                                } else {
                                    echo $s['title_en'];
                                }
                            } ?>
                        </h3>
                        <div class="line"></div>
                        <div class="desc2">
                            <?php //echo $_SESSION['language_id'] == 1 ? $s['text'] : $s['text_en']; ?>
                            <?php 
                            if($_SESSION['language_id'] == 1){
                                echo $s['text'];
                            } else {
                                if($s['text_en'] == ''){
                                    echo $s['text'];
                                } else {
                                    echo $s['text_en'];
                                }
                            } ?>
                        </div>
                        <?php if ($s['link'] != '' || $s['link'] != NULL) { ?>
                            <div class="cta-cont">
                                <a href="<?php echo $s['link']; ?>">
                                    <div class="cta">
                                        <div class="left">
                                            <div class="txt"><?php echo translateTo('Saiba mais'); ?></div>
                                        </div>
                                        <div class="right">
                                            <div class="arrow">
                                                <svg xmlns="http:www.w3.org/2000/svg" width="23" height="15.828" viewBox="0 0 23 15.828">
                                                    <g transform="translate(0 -41.916)">
                                                        <path d="M22.687,49.074l-6.844-6.844a1.069,1.069,0,1,0-1.512,1.512l5.019,5.019H1.069a1.069,1.069,0,1,0,0,2.139H19.349L14.33,55.918a1.069,1.069,0,0,0,1.512,1.512l6.844-6.844A1.069,1.069,0,0,0,22.687,49.074Z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                    </div>
                </div>

            <?php
            }
            ?>
        </div>
        <div class="indicators">
            <?php foreach ($slideshow as $s) {
            ?>
                <div class="ind <?php echo $s['display_order'] == 0 ? 'active' : ''; ?>" onClick="currentSlide(<?php echo $s['display_order'] + 1; ?>)">
                    <svg version="1.1" xmlns="http:www.w3.org/2000/svg" xmlns:xlink="http:www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512">
                        <g>
                            <path d="M479.1,129.2l-96.3-96.3c-15.3-16-36.7-24.4-58.8-24.4h-38.2l0.8,100.1
                                    c81,16.8,132.9,95.5,116.1,176.5s-95.5,132.9-176.5,116.1c-81-16.8-132.9-95.5-116.1-176.5c12.2-58.1,58.1-103.9,116.1-116.1
                                    L225.4,8.5H188c-22.2,0-43.5,9.2-58.8,24.4l-96.2,96.3c-16,15.3-24.4,36.7-24.4,58.8v136c0,22.2,9.2,43.5,24.4,58.8l96.3,96.3
                                    c15.3,16,36.7,24.4,58.8,24.4h136c22.2,0,43.5-9.2,58.8-24.4l96.3-96.3c16-15.3,24.4-36.7,24.4-58.8V188
                                    C503.5,165.9,495.1,144.5,479.1,129.2" />
                            <path d="M172,253.3c0,46.6,37.4,84,84,84s84-37.4,84-84c0-34.4-21.4-65.7-53.5-78.7v77.9
                                    c0,16.8-13.8,30.6-30.6,30.6s-30.6-13.8-30.6-30.6v-77.2C193.4,187.6,172,219,172,253.3" />
                        </g>
                    </svg>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php
include "include/footer.php";
?>