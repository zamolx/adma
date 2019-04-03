<?php
if (($option ==='IE') OR ($option ==='A') OR ($option ==='DK') OR ($option ==='CH')) {
    if (($weightNew > 0) AND ($weightNew<2)) { $answer =10.30; }
    elseif (($weightNew >= 2) AND ($weightNew<=5)) {$answer = 11.40;}
    elseif (($weightNew > 5) AND ($weightNew <=10)) {$answer = 11.70;}
    elseif (($weightNew > 10) AND ($weightNew <=15)) {$answer = 12.20;}
    elseif (($weightNew > 15) AND ($weightNew <=20)) {$answer = 12.70;}
    elseif (($weightNew > 20) AND ($weightNew <=25)) {$answer = 13.20;}
    elseif (($weightNew > 25) AND ($weightNew <=30)) {$answer = 13.70;}
    elseif (($weightNew > 30) AND ($weightNew <=40)) {$answer = 17.10;}
    elseif (($weightNew > 40) AND ($weightNew <=50)) {$answer = 18.70;}
    else {

        $answer ="The package should be lower or equal to 50kg";}
}

if (($option ==='B') OR ($option ==='F') OR ($option ==='D') OR ($option ==='L') OR ($option ==='NL')) {
    if (($weightNew > 0) AND ($weightNew<2)) { $answer =9.30; }
    elseif (($weightNew >= 2) AND ($weightNew<=5)) {$answer = 10.30;}
    elseif (($weightNew > 5) AND ($weightNew<=10)) {$answer = 10.50;}
    elseif (($weightNew > 10) AND ($weightNew<=15)) {$answer = 11.00;}
    elseif (($weightNew > 15) AND ($weightNew<=20)) {$answer = 11.50;}
    elseif (($weightNew > 20) AND ($weightNew<=25)) {$answer = 12.00;}
    elseif (($weightNew > 25) AND ($weightNew<=30)) {$answer = 12.40;}
    elseif (($weightNew > 30) AND ($weightNew<=40)) {$answer = 15.40;}
    elseif (($weightNew > 40) AND ($weightNew<=50)) {$answer = 16.90;}
    else {
        $answer ="The package should be lower or equal to 50kg";}
}

if (($option ==='H') OR ($option ==='I') OR ($option ==='PL') OR ($option ==='SK')) {
    if (($weightNew > 0) AND ($weightNew<2)) { $answer =12.90; }
    elseif (($weightNew >= 2) AND ($weightNew<=5)) {$answer = 14.40;}
    elseif (($weightNew > 5) AND ($weightNew<=10)) {$answer = 14.70;}
    elseif (($weightNew > 10) AND ($weightNew<=15)) {$answer = 15.10;}
    elseif (($weightNew > 15) AND ($weightNew<=20)) {$answer = 15.40;}
    elseif (($weightNew > 20) AND ($weightNew<=25)) {$answer = 15.80;}
    elseif (($weightNew > 25) AND ($weightNew<=30)) {$answer = 16.20;}
    elseif (($weightNew > 30) AND ($weightNew<=40)) {$answer = 18.70;}
    elseif (($weightNew > 40) AND ($weightNew<=50)) {$answer = 20.90;}
    else {
        $answer ="The package should be lower or equal to 50kg";}
}

if (($option ==='NI')) {
    if (($weightNew > 0) AND ($weightNew<=50)) { $answer =4.45; }
    else {
        $answer ="The package should be lower than 50kg";}
}

if (($option ==='CZ')) {
    if (($weightNew >= 0) AND ($weightNew<=30)) { $answer =3.95; }
    else {
        $answer ="The package should be lower or equal to 30kg";}
}

if (($option ==='GB') ) {
    if (($weightNew > 0) AND ($weightNew<2)) { $answer =7.10; }
    elseif (($weightNew >= 2) AND ($weightNew<=5)) {$answer = 8.80;}
    elseif (($weightNew > 5) AND ($weightNew<=10)) {$answer = 9.00;}
    elseif (($weightNew > 10) AND ($weightNew<=15)) {$answer = 9.40;}
    elseif (($weightNew > 15) AND ($weightNew<=20)) {$answer = 9.80;}
    elseif (($weightNew > 20) AND ($weightNew<=25)) {$answer = 10.20;}
    elseif (($weightNew > 25) AND ($weightNew<=30)) {$answer = 10.50;}
    elseif (($weightNew > 30) AND ($weightNew<=40)) {$answer = 14.90;}
    elseif (($weightNew > 40) AND ($weightNew<=50)) {$answer = 16.70;}
    else {
        $answer ="The package should be lower or equal to 50kg";}
}