//kalkulator otomatis tinggi badan menurut umur laki 1sd
var vault = prompt("Masukan Umur (Bulan) Putra Anda").toUpperCase();
var angka = prompt("Masukan Tinggi Badan Putra Anda");

var sdnegatif0  = 48  ;
var median0     =49.9   ;
var sdpositif0  =51.8   ;

var sdnegatif1  = 52.8  ;
var median1     = 54.7  ;
var sdpositif1  = 56.7  ;

var sdnegatif2  = 56.4  ;
var median2     = 58.4  ;
var sdpositif2  = 60.4  ;

var sdnegatif3  = 59.4  ;
var median3     = 61.4  ;
var sdpositif3  = 63.5  ;

var sdnegatif4  = 61.8  ;
var median4     = 63.9  ;
var sdpositif4  = 66  ;

var sdnegatif5  = 63.8  ;
var median5     = 65.9  ;
var sdpositif5  = 68  ;

var sdpositif6  = 69.8  ;
var median6     = 67.6  ;
var sdnegatif6  = 65.5  ;

var sdpositif7  = 71.3  ;
var median7     =  69.2 ;
var sdnegatif7  =  67 ;

var sdpositif8  =72.8   ;
var median8     = 70.6  ;
var sdnegatif8  =68.4   ;

var sdpositif9  =74.2   ;
var median9     =72   ;
var sdnegatif9  =69.7   ;

var sdpositif10  =75.6   ;
var median10     =73.3   ;
var sdnegatif10  = 71  ;

var sdpositif11  = 76.9  ;
var median11     = 74.5  ;
var sdnegatif11  = 72.2  ;

var sdpositif12  = 78.1  ;
var median12     = 75.7  ;
var sdnegatif12  = 73.4  ;

var sdpositif13  = 79.3  ;
var median13     = 76.9  ;
var sdnegatif13  = 74.5  ;

var sdpositif14  = 80.5  ;
var median14     = 78  ;
var sdnegatif14  = 75.6  ;

var sdpositif15  = 81.7  ;
var median15     = 79.1  ;
var sdnegatif15  = 76.6  ;

var sdpositif16  = 82.8  ;
var median16     = 80.2  ;
var sdnegatif16  = 77.6  ;

var sdpositif17  = 83.9  ;
var median17     = 81.2  ;
var sdnegatif17  = 78.6  ;

var sdpositif18  = 85  ;
var median18     = 82.3  ;
var sdnegatif18  = 79.6  ;

var sdpositif19  = 86  ;
var median19     = 83.2  ;
var sdnegatif19  = 80.5  ;

var sdpositif20  = 87  ;
var median20     = 84.2  ;
var sdnegatif20  = 81.4  ;

var sdpositif21  = 88  ;
var median21     = 85.1  ;
var sdnegatif21  = 82.3  ;

var sdpositif22  = 89  ;
var median22     = 86  ;
var sdnegatif22  = 83.1  ;

var sdpositif23  = 89.9  ;
var median23     = 86.9  ;
var sdnegatif23  = 83.9  ;

var sdpositif24  = 90.9  ;
var median24     = 87.8  ;
var sdnegatif24  = 84.8  ;

var sdpositif25  =   91.1;
var median25     =   88;
var sdnegatif25  =   84.9;

var sdpositif26  =   92;
var median26     =   88.8;
var sdnegatif26  =   85.6;

var sdpositif27  =   92.9;
var median27     =   89.6;
var sdnegatif27  =   86.4;

var sdpositif28  =   93.7;
var median28     =   90.4;
var sdnegatif28  =   87.1;

var sdpositif29  =   94.5;
var median29     =   91.2;
var sdnegatif29  =   87.8;

var sdpositif30  =   95.3;
var median30     =   91.9;
var sdnegatif30  =   88.5;

var sdpositif31  =   96.1;
var median31     =   92.7;
var sdnegatif31  =   89.2;

var sdpositif32  =   96.9;
var median32     =   93.4;
var sdnegatif32  =   89.9;

var sdpositif33  =   97.6;
var median33     =   94.1;
var sdnegatif33  =   90.5;

var sdpositif34  =   98.4;
var median34     =   94.8;
var sdnegatif34  =   91.1;

var sdpositif35  =   99.1;
var median35     =   95.4;
var sdnegatif35  =   91.8;

var sdpositif36  =   99.8;
var median36     =   96.1;
var sdnegatif36  =   92.4;

var sdpositif37  =   100.5;
var median37     =   96.7;
var sdnegatif37  =   93;

var sdpositif38  =   101.2;
var median38     =   97.4;
var sdnegatif38  =   93.6;

var sdpositif39  =   101.8;
var median39     =   98;
var sdnegatif39  = 94.2  ;

var sdpositif40  =   102.5;
var median40     =   98.6;
var sdnegatif40  =   94.7;

var sdpositif41  =   103.2;
var median41     =   99.2;
var sdnegatif41  =   95.3;

var sdpositif42  =   103.8;
var median42     =   99.9;
var sdnegatif42  =   95.9;

var sdpositif43  =   104.5;
var median43     =   100.4;
var sdnegatif43  =   96.4;

var sdpositif44  =   105.1;
var median44     =   101;
var sdnegatif44  =   97;

var sdpositif45  =   105.7;
var median45     =   101.6;
var sdnegatif45  =   97.5;

var sdpositif46  =   106.3;
var median46     =   102.2;
var sdnegatif46  =   98.1;

var sdpositif47  =   106.9;
var median47     =   102.8;
var sdnegatif47  =   98.6;

var sdpositif48  =   107.5;
var median48     =   103.3;
var sdnegatif48  =   99.1;

var sdpositif49  =   108.1;
var median49     =   103.9;
var sdnegatif49  =  99.7 ;

var sdpositif50  =   108.7;
var median50     =   104.4;
var sdnegatif50  =   100.2;

var sdpositif51  =   109.3;
var median51     =   105;
var sdnegatif51  =   100.7;

var sdpositif52  =   109.9;
var median52     =   105.6;
var sdnegatif52  =   101.2;

var sdpositif53  =   110.5;
var median53     =   106.1;
var sdnegatif53  =   101.7;

var sdpositif54  =   111.1;
var median54     =   106.7;
var sdnegatif54  = 102.3  ;

var sdpositif55  =   111.7;
var median55     =   107.2;
var sdnegatif55  =   102.8;

var sdpositif56  =   112.3;
var median56     =   107.8;
var sdnegatif56  =   103.3;

var sdpositif57  =   112.8;
var median57     =   108.3;
var sdnegatif57  =   103.8;

var sdpositif58  =   113.4;
var median58    =   108.9;
var sdnegatif58  =   104.3;

var sdpositif59  =   114;
var median59     =   109.4;
var sdnegatif59  =   104.8;

var sdpositif60  = 114.6  ;
var median60     =   110;
var sdnegatif60  = 105.3  ;

switch (vault) {
    case "0":
        if(angka - median0 > 0){
            hasiltbulaki = ((angka-median0)/ (sdpositif0-median0) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median0 < 0){
            hasiltbulaki = ((angka-median0)/ (median0-sdnegatif0))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;


    case "1":
        if(angka - median1 > 0){
            hasiltbulaki = ((angka-median1)/ (sdpositif1-median1) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median1 < 0){
            hasiltbulaki = ((angka-median1)/ (median1-sdnegatif1))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;


    case "2":
        if(angka - median2 > 0){
            hasiltbulaki = ((angka-median2)/ (sdpositif2-median2) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median2 < 0){
            hasiltbulaki = ((angka-median2)/ (median2-sdnegatif2))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;
    case "3":
        if(angka - median3 > 0){
            hasiltbulaki = ((angka-median3)/ (sdpositif3-median3) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median3 < 0){
            hasiltbulaki = ((angka-median3)/ (median3-sdnegatif3))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;
        
        
case "4":
    if(angka - median4 > 0){
        hasiltbulaki = ((angka-median4)/ (sdpositif4-median4) )
        alert(hasiltbulaki)
    if(hasiltbulaki > 2){
        alert("Anak anda termasuk dalam kategori tinggi");
    }
    else if(hasiltbulaki <-3){
        alert("Anak anda termasuk dalam kategori sangat pendek");
    }
    else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
        alert("Anak anda termasuk dalam kategori pendek");
    }
    else {
        alert("Anak anda termasuk dalam kategori normal");
    }
    } else if(angka - median4 < 0){
        hasiltbulaki = ((angka-median4)/ (median4-sdnegatif4))
        alert(hasiltbulaki)
    if(hasiltbulaki > 2){
        alert("Anak anda termasuk dalam kategori tinggi");
    }
    else if(hasiltbulaki <-3){
        alert("Anak anda termasuk dalam kategori sangat pendek");
    }
    else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
        alert("Anak anda termasuk dalam kategori pendek");
    }
    else {
        alert("Anak anda termasuk dalam kategori normal");
    }
    } else {
        alert('Not Available');
    }
    break;



    case "5":
        if(angka - median5 > 0){
            hasiltbulaki = ((angka-median5)/ (sdpositif5-median5) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median5 < 0){
            hasiltbulaki = ((angka-median5)/ (median5-sdnegatif5))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;


        case "6":
            if(angka - median6 > 0){
                hasiltbulaki = ((angka-median6)/ (sdpositif6-median6) )
                alert(hasiltbulaki)
            if(hasiltbulaki > 2){
                alert("Anak anda termasuk dalam kategori tinggi");
            }
            else if(hasiltbulaki <-3){
                alert("Anak anda termasuk dalam kategori sangat pendek");
            }
            else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
                alert("Anak anda termasuk dalam kategori pendek");
            }
            else {
                alert("Anak anda termasuk dalam kategori normal");
            }
            } else if(angka - median6 < 0){
                hasiltbulaki = ((angka-median6)/ (median6-sdnegatif6))
                alert(hasiltbulaki)
            if(hasiltbulaki > 2){
                alert("Anak anda termasuk dalam kategori tinggi");
            }
            else if(hasiltbulaki <-3){
                alert("Anak anda termasuk dalam kategori sangat pendek");
            }
            else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
                alert("Anak anda termasuk dalam kategori pendek");
            }
            else {
                alert("Anak anda termasuk dalam kategori normal");
            }
            } else {
                alert('Not Available');
            }
            break;
    

            case "7":
                if(angka - median7 > 0){
                    hasiltbulaki = ((angka-median7)/ (sdpositif7-median7) )
                    alert(hasiltbulaki)
                if(hasiltbulaki > 2){
                    alert("Anak anda termasuk dalam kategori tinggi");
                }
                else if(hasiltbulaki <-3){
                    alert("Anak anda termasuk dalam kategori sangat pendek");
                }
                else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
                    alert("Anak anda termasuk dalam kategori pendek");
                }
                else {
                    alert("Anak anda termasuk dalam kategori normal");
                }
                } else if(angka - median7 < 0){
                    hasiltbulaki = ((angka-median7)/ (median7-sdnegatif7))
                    alert(hasiltbulaki)
                if(hasiltbulaki > 2){
                    alert("Anak anda termasuk dalam kategori tinggi");
                }
                else if(hasiltbulaki <-3){
                    alert("Anak anda termasuk dalam kategori sangat pendek");
                }
                else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
                    alert("Anak anda termasuk dalam kategori pendek");
                }
                else {
                    alert("Anak anda termasuk dalam kategori normal");
                }
                } else {
                    alert('Not Available');
                }
                break;
                
case "8":
    if(angka - median8 > 0){
        hasiltbulaki = ((angka-median8)/ (sdpositif8-median8) )
        alert(hasiltbulaki)
    if(hasiltbulaki > 2){
        alert("Anak anda termasuk dalam kategori tinggi");
    }
    else if(hasiltbulaki <-3){
        alert("Anak anda termasuk dalam kategori sangat pendek");
    }
    else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
        alert("Anak anda termasuk dalam kategori pendek");
    }
    else {
        alert("Anak anda termasuk dalam kategori normal");
    }
    } else if(angka - median8 < 0){
        hasiltbulaki = ((angka-median8)/ (median8-sdnegatif8))
        alert(hasiltbulaki)
    if(hasiltbulaki > 2){
        alert("Anak anda termasuk dalam kategori tinggi");
    }
    else if(hasiltbulaki <-3){
        alert("Anak anda termasuk dalam kategori sangat pendek");
    }
    else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
        alert("Anak anda termasuk dalam kategori pendek");
    }
    else {
        alert("Anak anda termasuk dalam kategori normal");
    }
    } else {
        alert('Not Available');
    }
    break;


    case "9":
        if(angka - median9 > 0){
            hasiltbulaki = ((angka-median9)/ (sdpositif9-median9) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median9 < 0){
            hasiltbulaki = ((angka-median9)/ (median9-sdnegatif9))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;


        case "10":
            if(angka - median10 > 0){
                hasiltbulaki = ((angka-median10)/ (sdpositif10-median10) )
                alert(hasiltbulaki)
            if(hasiltbulaki > 2){
                alert("Anak anda termasuk dalam kategori tinggi");
            }
            else if(hasiltbulaki <-3){
                alert("Anak anda termasuk dalam kategori sangat pendek");
            }
            else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
                alert("Anak anda termasuk dalam kategori pendek");
            }
            else {
                alert("Anak anda termasuk dalam kategori normal");
            }
            } else if(angka - median10 < 0){
                hasiltbulaki = ((angka-median10)/ (median10-sdnegatif10))
                alert(hasiltbulaki)
            if(hasiltbulaki > 2){
                alert("Anak anda termasuk dalam kategori tinggi");
            }
            else if(hasiltbulaki <-3){
                alert("Anak anda termasuk dalam kategori sangat pendek");
            }
            else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
                alert("Anak anda termasuk dalam kategori pendek");
            }
            else {
                alert("Anak anda termasuk dalam kategori normal");
            }
            } else {
                alert('Not Available');
            }
            break;
    
            case "11":
                if(angka - median11 > 0){
                    hasiltbulaki = ((angka-median11)/ (sdpositif11-median11) )
                    alert(hasiltbulaki)
                if(hasiltbulaki > 2){
                    alert("Anak anda termasuk dalam kategori tinggi");
                }
                else if(hasiltbulaki <-3){
                    alert("Anak anda termasuk dalam kategori sangat pendek");
                }
                else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
                    alert("Anak anda termasuk dalam kategori pendek");
                }
                else {
                    alert("Anak anda termasuk dalam kategori normal");
                }
                } else if(angka - median11 < 0){
                    hasiltbulaki = ((angka-median11)/ (median11-sdnegatif11))
                    alert(hasiltbulaki)
                if(hasiltbulaki > 2){
                    alert("Anak anda termasuk dalam kategori tinggi");
                }
                else if(hasiltbulaki <-3){
                    alert("Anak anda termasuk dalam kategori sangat pendek");
                }
                else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
                    alert("Anak anda termasuk dalam kategori pendek");
                }
                else {
                    alert("Anak anda termasuk dalam kategori normal");
                }
                } else {
                    alert('Not Available');
                }
                break;
                
                case "12":
        if(angka - median12 > 0){
            hasiltbulaki = ((angka-median12)/ (sdpositif12-median12) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median12 < 0){
            hasiltbulaki = ((angka-median12)/ (median12-sdnegatif12))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "13":
            if(angka - median13 > 0){
                hasiltbulaki = ((angka-median13)/ (sdpositif13-median13) )
                alert(hasiltbulaki)
            if(hasiltbulaki > 2){
                alert("Anak anda termasuk dalam kategori tinggi");
            }
            else if(hasiltbulaki <-3){
                alert("Anak anda termasuk dalam kategori sangat pendek");
            }
            else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
                alert("Anak anda termasuk dalam kategori pendek");
            }
            else {
                alert("Anak anda termasuk dalam kategori normal");
            }
            } else if(angka - median13 < 0){
                hasiltbulaki = ((angka-median13)/ (median13-sdnegatif13))
                alert(hasiltbulaki)
            if(hasiltbulaki > 2){
                alert("Anak anda termasuk dalam kategori tinggi");
            }
            else if(hasiltbulaki <-3){
                alert("Anak anda termasuk dalam kategori sangat pendek");
            }
            else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
                alert("Anak anda termasuk dalam kategori pendek");
            }
            else {
                alert("Anak anda termasuk dalam kategori normal");
            }
            } else {
                alert('Not Available');
            }
            break;

            case "14":
        if(angka - median14 > 0){
            hasiltbulaki = ((angka-median14)/ (sdpositif14-median14) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median14 < 0){
            hasiltbulaki = ((angka-median14)/ (median14-sdnegatif14))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "15":
        if(angka - median15 > 0){
            hasiltbulaki = ((angka-median15)/ (sdpositif15-median15) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median15 < 0){
            hasiltbulaki = ((angka-median15)/ (median15-sdnegatif15))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "16":
        if(angka - median16 > 0){
            hasiltbulaki = ((angka-median16)/ (sdpositif16-median16) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median16 < 0){
            hasiltbulaki = ((angka-median16)/ (median16-sdnegatif16))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "17":
        if(angka - median17 > 0){
            hasiltbulaki = ((angka-median17)/ (sdpositif17-median17) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median17 < 0){
            hasiltbulaki = ((angka-median17)/ (median17-sdnegatif17))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "18":
        if(angka - median18 > 0){
            hasiltbulaki = ((angka-median18)/ (sdpositif18-median18) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median18 < 0){
            hasiltbulaki = ((angka-median18)/ (median18-sdnegatif18))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "19":
        if(angka - median19 > 0){
            hasiltbulaki = ((angka-median19)/ (sdpositif19-median19) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median19 < 0){
            hasiltbulaki = ((angka-median19)/ (median19-sdnegatif19))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "20":
        if(angka - median20 > 0){
            hasiltbulaki = ((angka-median20)/ (sdpositif20-median20) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median20 < 0){
            hasiltbulaki = ((angka-median20)/ (median20-sdnegatif20))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "21":
        if(angka - median21 > 0){
            hasiltbulaki = ((angka-median21)/ (sdpositif21-median21) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median21 < 0){
            hasiltbulaki = ((angka-median21)/ (median21-sdnegatif21))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "22":
        if(angka - median22 > 0){
            hasiltbulaki = ((angka-median22)/ (sdpositif22-median22) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median22 < 0){
            hasiltbulaki = ((angka-median22)/ (median22-sdnegatif22))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "23":
        if(angka - median23 > 0){
            hasiltbulaki = ((angka-median23)/ (sdpositif23-median23) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median23 < 0){
            hasiltbulaki = ((angka-median23)/ (median23-sdnegatif23))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "24":
        if(angka - median24 > 0){
            hasiltbulaki = ((angka-median24)/ (sdpositif24-median24) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median24 < 0){
            hasiltbulaki = ((angka-median24)/ (median24-sdnegatif24))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "25":
        if(angka - median25 > 0){
            hasiltbulaki = ((angka-median25)/ (sdpositif25-median25) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median25 < 0){
            hasiltbulaki = ((angka-median25)/ (median25-sdnegatif25))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "26":
        if(angka - median26 > 0){
            hasiltbulaki = ((angka-median26)/ (sdpositif26-median26) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median26 < 0){
            hasiltbulaki = ((angka-median26)/ (median26-sdnegatif26))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "27":
        if(angka - median27 > 0){
            hasiltbulaki = ((angka-median27)/ (sdpositif27-median27) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median27 < 0){
            hasiltbulaki = ((angka-median27)/ (median27-sdnegatif27))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "28":
        if(angka - median28 > 0){
            hasiltbulaki = ((angka-median28)/ (sdpositif28-median28) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median28 < 0){
            hasiltbulaki = ((angka-median28)/ (median28-sdnegatif28))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "29":
        if(angka - median29 > 0){
            hasiltbulaki = ((angka-median29)/ (sdpositif29-median29) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median29 < 0){
            hasiltbulaki = ((angka-median29)/ (median29-sdnegatif29))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "30":
        if(angka - median30 > 0){
            hasiltbulaki = ((angka-median30)/ (sdpositif30-median30) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median30 < 0){
            hasiltbulaki = ((angka-median30)/ (median30-sdnegatif30))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "31":
        if(angka - median31 > 0){
            hasiltbulaki = ((angka-median31)/ (sdpositif31-median31) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median31 < 0){
            hasiltbulaki = ((angka-median31)/ (median31-sdnegatif31))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "32":
        if(angka - median32 > 0){
            hasiltbulaki = ((angka-median32)/ (sdpositif32-median32) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median32 < 0){
            hasiltbulaki = ((angka-median32)/ (median32-sdnegatif32))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "33":
        if(angka - median33 > 0){
            hasiltbulaki = ((angka-median33)/ (sdpositif33-median33) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median33 < 0){
            hasiltbulaki = ((angka-median33)/ (median33-sdnegatif33))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "34":
        if(angka - median34 > 0){
            hasiltbulaki = ((angka-median34)/ (sdpositif34-median34) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median34 < 0){
            hasiltbulaki = ((angka-median34)/ (median34-sdnegatif34))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "35":
        if(angka - median35 > 0){
            hasiltbulaki = ((angka-median35)/ (sdpositif35-median35) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median35 < 0){
            hasiltbulaki = ((angka-median35)/ (median35-sdnegatif35))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "36":
        if(angka - median36 > 0){
            hasiltbulaki = ((angka-median36)/ (sdpositif36-median36) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median36 < 0){
            hasiltbulaki = ((angka-median36)/ (median36-sdnegatif36))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "37":
        if(angka - median37 > 0){
            hasiltbulaki = ((angka-median37)/ (sdpositif37-median37) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median37 < 0){
            hasiltbulaki = ((angka-median37)/ (median37-sdnegatif37))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "38":
        if(angka - median38 > 0){
            hasiltbulaki = ((angka-median38)/ (sdpositif38-median38) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median38 < 0){
            hasiltbulaki = ((angka-median38)/ (median38-sdnegatif38))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "39":
        if(angka - median39 > 0){
            hasiltbulaki = ((angka-median39)/ (sdpositif39-median39) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median39 < 0){
            hasiltbulaki = ((angka-median39)/ (median39-sdnegatif39))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "40":
        if(angka - median40 > 0){
            hasiltbulaki = ((angka-median40)/ (sdpositif40-median40) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median40 < 0){
            hasiltbulaki = ((angka-median40)/ (median40-sdnegatif40))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "41":
        if(angka - median41 > 0){
            hasiltbulaki = ((angka-median41)/ (sdpositif41-median41) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median41 < 0){
            hasiltbulaki = ((angka-median41)/ (median41-sdnegatif41))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "42":
        if(angka - median42 > 0){
            hasiltbulaki = ((angka-median42)/ (sdpositif42-median42) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median42 < 0){
            hasiltbulaki = ((angka-median42)/ (median42-sdnegatif42))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "43":
        if(angka - median43 > 0){
            hasiltbulaki = ((angka-median43)/ (sdpositif43-median43) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median43 < 0){
            hasiltbulaki = ((angka-median43)/ (median43-sdnegatif43))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "44":
        if(angka - median44 > 0){
            hasiltbulaki = ((angka-median44)/ (sdpositif44-median44) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median44 < 0){
            hasiltbulaki = ((angka-median44)/ (median44-sdnegatif44))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "45":
        if(angka - median45 > 0){
            hasiltbulaki = ((angka-median45)/ (sdpositif45-median45) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median45 < 0){
            hasiltbulaki = ((angka-median45)/ (median45-sdnegatif45))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "46":
        if(angka - median46 > 0){
            hasiltbulaki = ((angka-median46)/ (sdpositif46-median46) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median46 < 0){
            hasiltbulaki = ((angka-median46)/ (median46-sdnegatif46))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "47":
        if(angka - median47 > 0){
            hasiltbulaki = ((angka-median47)/ (sdpositif47-median47) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median47 < 0){
            hasiltbulaki = ((angka-median47)/ (median47-sdnegatif47))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "48":
        if(angka - median48 > 0){
            hasiltbulaki = ((angka-median48)/ (sdpositif48-median48) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median48 < 0){
            hasiltbulaki = ((angka-median48)/ (median48-sdnegatif48))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "49":
        if(angka - median49 > 0){
            hasiltbulaki = ((angka-median49)/ (sdpositif49-median49) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median49 < 0){
            hasiltbulaki = ((angka-median49)/ (median49-sdnegatif49))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "50":
        if(angka - median50 > 0){
            hasiltbulaki = ((angka-median50)/ (sdpositif50-median50) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median50 < 0){
            hasiltbulaki = ((angka-median50)/ (median50-sdnegatif50))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "51":
        if(angka - median51 > 0){
            hasiltbulaki = ((angka-median51)/ (sdpositif51-median51) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median51 < 0){
            hasiltbulaki = ((angka-median51)/ (median51-sdnegatif51))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "52":
        if(angka - median52 > 0){
            hasiltbulaki = ((angka-median52)/ (sdpositif52-median52) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median52 < 0){
            hasiltbulaki = ((angka-median52)/ (median52-sdnegatif52))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "53":
        if(angka - median53 > 0){
            hasiltbulaki = ((angka-median53)/ (sdpositif53-median53) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median53 < 0){
            hasiltbulaki = ((angka-median53)/ (median53-sdnegatif53))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "54":
        if(angka - median54 > 0){
            hasiltbulaki = ((angka-median54)/ (sdpositif54-median54) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median54 < 0){
            hasiltbulaki = ((angka-median54)/ (median54-sdnegatif54))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "55":
        if(angka - median55 > 0){
            hasiltbulaki = ((angka-median55)/ (sdpositif55-median55) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median55 < 0){
            hasiltbulaki = ((angka-median55)/ (median55-sdnegatif55))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "56":
        if(angka - median56 > 0){
            hasiltbulaki = ((angka-median56)/ (sdpositif56-median56) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median56 < 0){
            hasiltbulaki = ((angka-median56)/ (median56-sdnegatif56))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "57":
        if(angka - median57 > 0){
            hasiltbulaki = ((angka-median57)/ (sdpositif57-median57) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median57 < 0){
            hasiltbulaki = ((angka-median57)/ (median57-sdnegatif57))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "58":
        if(angka - median58 > 0){
            hasiltbulaki = ((angka-median58)/ (sdpositif58-median58) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median58 < 0){
            hasiltbulaki = ((angka-median58)/ (median58-sdnegatif58))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "59":
        if(angka - median59 > 0){
            hasiltbulaki = ((angka-median59)/ (sdpositif59-median59) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median59 < 0){
            hasiltbulaki = ((angka-median59)/ (median59-sdnegatif59))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "60":
        if(angka - median60 > 0){
            hasiltbulaki = ((angka-median60)/ (sdpositif60-median60) )
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median60 < 0){
            hasiltbulaki = ((angka-median60)/ (median60-sdnegatif60))
            alert(hasiltbulaki)
        if(hasiltbulaki > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbulaki >= -3 && hasiltbulaki <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else {
            alert('Not Available');
        }
        break;
    default:
       console.log("The vault " + vault + " is not known!!");
        
}