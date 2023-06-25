//kalkulator otomatis index masa tubuh menurut umur laki 1sd

var tb = prompt("Masukan Tinggi Badan (cm) Putra Anda");
var tinggi = (tb/100);

var bb = prompt("Masukan Berat Badan Putra Anda");
var imt = (bb/tinggi);

var vault = prompt("Masukan Umur (Bulan) Putra Anda").toUpperCase();
var angka = imt;

var sdpositif0  =  14.8 ;
var median0     = 13.4  ;
var sdnegatif0  = 12.2  ;

var sdpositif1  = 16.3  ;
var median1     =  14.9 ;
var sdnegatif1  = 13.6  ;

var sdpositif2  = 17.8  ;
var median2     = 16.3  ;
var sdnegatif2  =15   ;

var sdpositif3  = 18.4  ;
var median3     = 16.9  ;
var sdnegatif3  = 15.5  ;

var sdpositif4  = 18.7  ;
var median4     = 17.2  ;
var sdnegatif4  = 15.8  ;

var sdpositif5  = 18.8  ;
var median5     = 17.3  ;
var sdnegatif5  = 15.9  ;

var sdpositif6  =18.8   ;
var median6     =17.3   ;
var sdnegatif6  = 16  ;

var sdpositif7  = 18.8  ;
var median7     = 17.3  ;
var sdnegatif7  = 16  ;

var sdpositif8  = 18.7  ;
var median8     = 17.3  ;
var sdnegatif8  =  15.9 ;

var sdpositif9  = 18.6  ;
var median9     = 17.2  ;
var sdnegatif9  = 15.8  ;

var sdpositif10  = 18.5  ;
var median10     = 17  ;
var sdnegatif10  = 15.7  ;

var sdpositif11  = 18.4  ;
var median11     = 16.9  ;
var sdnegatif11  = 15.6  ;

var sdpositif12  =  18.2 ;
var median12     =  16.8 ;
var sdnegatif12  =  15.5 ;

var sdpositif13  = 18.1  ;
var median13     = 16.7  ;
var sdnegatif13  = 15.4  ;

var sdpositif14  = 18  ;
var median14     = 16.6  ;
var sdnegatif14  = 15.3  ;

var sdpositif15  = 17.8  ;
var median15     = 16.4  ;
var sdnegatif15  = 15.2  ;

var sdpositif16  = 17.7  ;
var median16     = 16.3  ;
var sdnegatif16  = 15.1  ;

var sdpositif17  = 17.6  ;
var median17     = 16.2  ;
var sdnegatif17  = 15  ;

var sdpositif18  = 17.5  ;
var median18     = 16.1  ;
var sdnegatif18  = 14.9  ;

var sdpositif19  =  17.4 ;
var median19     =  16.1 ;
var sdnegatif19  = 14.9  ;

var sdpositif20  = 17.3  ;
var median20     = 16  ;
var sdnegatif20  = 14.8  ;

var sdpositif21  = 17.2  ;
var median21     = 15.9  ;
var sdnegatif21  = 14.7  ;

var sdpositif22  = 17.2  ;
var median22     = 15.8  ;
var sdnegatif22  = 14.7  ;

var sdpositif23  = 17.1  ;
var median23     = 15.8  ;
var sdnegatif23  = 14.6  ;

var sdpositif24  = 17  ;
var median24     = 15.7  ;
var sdnegatif24  = 14.6  ;

var sdpositif25  = 17.3  ;
var median25     =  16 ;
var sdnegatif25  =  14.8 ;

var sdpositif26  =  17.3 ;
var median26     =  15.9 ;
var sdnegatif26  =  14.8 ;

var sdpositif27  =  17.2 ;
var median27     =   15.9;
var sdnegatif27  =  14.7 ;

var sdpositif28  =  17.2 ;
var median28     =  15.9 ;
var sdnegatif28  =  14.7 ;

var sdpositif29  =  17.1 ;
var median29     =  15.8 ;
var sdnegatif29  =  14.7 ;

var sdpositif30  = 17.1  ;
var median30     =  15.8 ;
var sdnegatif30  =  14.6 ;

var sdpositif31  =  17.1 ;
var median31     =   15.8;
var sdnegatif31  =  14.6 ;

var sdpositif32  =  17.0 ;
var median32     =  15.7 ;
var sdnegatif32  = 14.6  ;

var sdpositif33  =  17.0 ;
var median33     = 15.7  ;
var sdnegatif33  =  14.5 ;

var sdpositif34  = 17.0  ;
var median34     = 15.7  ;
var sdnegatif34  = 14.5  ;

var sdpositif35  = 16.9  ;
var median35     = 15.6  ;
var sdnegatif35  = 14.5  ;

var sdpositif36  =  16.9 ;
var median36     =  15.6 ;
var sdnegatif36  =  14.4 ;

var sdpositif37  = 16.9  ;
var median37     =  15.6 ;
var sdnegatif37  =  14.4 ;

var sdpositif38  = 16.8  ;
var median38     =  15.5 ;
var sdnegatif38  =  14.4 ;

var sdpositif39  =16.8   ;
var median39     =15.5   ;
var sdnegatif39  =14.3   ;


var sdpositif40  = 16.8  ;
var median40     = 15.5  ;
var sdnegatif40  = 14.3  ;

var sdpositif41  =  16.8 ;
var median41     =  15.5 ;
var sdnegatif41  =  14.3 ;

var sdpositif42  = 16.8  ;
var median42     = 15.4  ;
var sdnegatif42  =  14.3 ;

var sdpositif43  = 16.7  ;
var median43     = 15.4  ;
var sdnegatif43  =  14.2 ;

var sdpositif44  = 16.7  ;
var median44     = 15.4  ;
var sdnegatif44  = 14.2  ;

var sdpositif45  =  16.7 ;
var median45     = 15.4  ;
var sdnegatif45  =  14.2 ;

var sdpositif46  =  16.7 ;
var median46     =  15.4 ;
var sdnegatif46  = 14.2  ;

var sdpositif47  = 16.7  ;
var median47     = 15.3  ;
var sdnegatif47  = 14.2  ;

var sdpositif48  = 16.7  ;
var median48     = 15.3  ;
var sdnegatif48  = 14.1  ;

var sdpositif49  = 16.7  ;
var median49     = 15.3  ;
var sdnegatif49  = 14.1  ;

var sdpositif50  = 16.7  ;
var median50     = 15.3  ;
var sdnegatif50  = 14.1  ;

var sdpositif51  =16.6   ;
var median51     =  15.3 ;
var sdnegatif51  =  14.1 ;

var sdpositif52  = 16.6  ;
var median52     = 15.3  ;
var sdnegatif52  =  14.1 ;

var sdpositif53  =  16.6 ;
var median53     =  15.3 ;
var sdnegatif53  = 14.1  ;

var sdpositif54  = 16.6  ;
var median54     = 15.3  ;
var sdnegatif54  =  14 ;

var sdpositif55  =  16.6 ;
var median55     = 15.2  ;
var sdnegatif55  = 14  ;

var sdpositif56  =  16.6 ;
var median56     =  15.2 ;
var sdnegatif56  = 14  ;

var sdpositif57  =  16.6 ;
var median57     = 15.2  ;
var sdnegatif57  = 14  ;

var sdpositif58  =  16.6 ;
var median58    =  15.2 ;
var sdnegatif58  = 14  ;

var sdpositif59  = 16.6  ;
var median59     = 15.2  ;
var sdnegatif59  = 14  ;

var sdpositif60  = 16.6  ;
var median60     = 15.2  ;
var sdnegatif60  =  14 ;

switch (vault) {
    case "0":
        if(angka - median0 > 0){
            hasilimtulaki = ((angka-median0)/ (sdpositif0-median0) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median0 < 0){
            hasilimtulaki = ((angka-median0)/ (median0-sdnegatif0))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median1)/ (sdpositif1-median1) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median1 < 0){
            hasilimtulaki = ((angka-median1)/ (median1-sdnegatif1))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median2)/ (sdpositif2-median2) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median2 < 0){
            hasilimtulaki = ((angka-median2)/ (median2-sdnegatif2))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median3)/ (sdpositif3-median3) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median3 < 0){
            hasilimtulaki = ((angka-median3)/ (median3-sdnegatif3))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
        hasilimtulaki = ((angka-median4)/ (sdpositif4-median4) )
        alert(hasilimtulaki)
    if(hasilimtulaki > 2){
        alert("Anak anda termasuk dalam kategori gemuk");
    }
    else if(hasilimtulaki <-3){
        alert("Anak anda termasuk dalam kategori sangat kurus");
    }
    else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
        alert("Anak anda termasuk dalam kategori kurus");
    }
    else {
        alert("Anak anda termasuk dalam kategori normal");
    }
    } else if(angka - median4 < 0){
        hasilimtulaki = ((angka-median4)/ (median4-sdnegatif4))
        alert(hasilimtulaki)
    if(hasilimtulaki > 2){
        alert("Anak anda termasuk dalam kategori gemuk");
    }
    else if(hasilimtulaki <-3){
        alert("Anak anda termasuk dalam kategori sangat kurus");
    }
    else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
        alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median5)/ (sdpositif5-median5) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median5 < 0){
            hasilimtulaki = ((angka-median5)/ (median5-sdnegatif5))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
                hasilimtulaki = ((angka-median6)/ (sdpositif6-median6) )
                alert(hasilimtulaki)
            if(hasilimtulaki > 2){
                alert("Anak anda termasuk dalam kategori gemuk");
            }
            else if(hasilimtulaki <-3){
                alert("Anak anda termasuk dalam kategori sangat kurus");
            }
            else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
                alert("Anak anda termasuk dalam kategori kurus");
            }
            else {
                alert("Anak anda termasuk dalam kategori normal");
            }
            } else if(angka - median6 < 0){
                hasilimtulaki = ((angka-median6)/ (median6-sdnegatif6))
                alert(hasilimtulaki)
            if(hasilimtulaki > 2){
                alert("Anak anda termasuk dalam kategori gemuk");
            }
            else if(hasilimtulaki <-3){
                alert("Anak anda termasuk dalam kategori sangat kurus");
            }
            else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
                alert("Anak anda termasuk dalam kategori kurus");
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
                    hasilimtulaki = ((angka-median7)/ (sdpositif7-median7) )
                    alert(hasilimtulaki)
                if(hasilimtulaki > 2){
                    alert("Anak anda termasuk dalam kategori gemuk");
                }
                else if(hasilimtulaki <-3){
                    alert("Anak anda termasuk dalam kategori sangat kurus");
                }
                else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
                    alert("Anak anda termasuk dalam kategori kurus");
                }
                else {
                    alert("Anak anda termasuk dalam kategori normal");
                }
                } else if(angka - median7 < 0){
                    hasilimtulaki = ((angka-median7)/ (median7-sdnegatif7))
                    alert(hasilimtulaki)
                if(hasilimtulaki > 2){
                    alert("Anak anda termasuk dalam kategori gemuk");
                }
                else if(hasilimtulaki <-3){
                    alert("Anak anda termasuk dalam kategori sangat kurus");
                }
                else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
                    alert("Anak anda termasuk dalam kategori kurus");
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
        hasilimtulaki = ((angka-median8)/ (sdpositif8-median8) )
        alert(hasilimtulaki)
    if(hasilimtulaki > 2){
        alert("Anak anda termasuk dalam kategori gemuk");
    }
    else if(hasilimtulaki <-3){
        alert("Anak anda termasuk dalam kategori sangat kurus");
    }
    else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
        alert("Anak anda termasuk dalam kategori kurus");
    }
    else {
        alert("Anak anda termasuk dalam kategori normal");
    }
    } else if(angka - median8 < 0){
        hasilimtulaki = ((angka-median8)/ (median8-sdnegatif8))
        alert(hasilimtulaki)
    if(hasilimtulaki > 2){
        alert("Anak anda termasuk dalam kategori gemuk");
    }
    else if(hasilimtulaki <-3){
        alert("Anak anda termasuk dalam kategori sangat kurus");
    }
    else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
        alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median9)/ (sdpositif9-median9) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median9 < 0){
            hasilimtulaki = ((angka-median9)/ (median9-sdnegatif9))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
                hasilimtulaki = ((angka-median10)/ (sdpositif10-median10) )
                alert(hasilimtulaki)
            if(hasilimtulaki > 2){
                alert("Anak anda termasuk dalam kategori gemuk");
            }
            else if(hasilimtulaki <-3){
                alert("Anak anda termasuk dalam kategori sangat kurus");
            }
            else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
                alert("Anak anda termasuk dalam kategori kurus");
            }
            else {
                alert("Anak anda termasuk dalam kategori normal");
            }
            } else if(angka - median10 < 0){
                hasilimtulaki = ((angka-median10)/ (median10-sdnegatif10))
                alert(hasilimtulaki)
            if(hasilimtulaki > 2){
                alert("Anak anda termasuk dalam kategori gemuk");
            }
            else if(hasilimtulaki <-3){
                alert("Anak anda termasuk dalam kategori sangat kurus");
            }
            else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
                alert("Anak anda termasuk dalam kategori kurus");
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
                    hasilimtulaki = ((angka-median11)/ (sdpositif11-median11) )
                    alert(hasilimtulaki)
                if(hasilimtulaki > 2){
                    alert("Anak anda termasuk dalam kategori gemuk");
                }
                else if(hasilimtulaki <-3){
                    alert("Anak anda termasuk dalam kategori sangat kurus");
                }
                else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
                    alert("Anak anda termasuk dalam kategori kurus");
                }
                else {
                    alert("Anak anda termasuk dalam kategori normal");
                }
                } else if(angka - median11 < 0){
                    hasilimtulaki = ((angka-median11)/ (median11-sdnegatif11))
                    alert(hasilimtulaki)
                if(hasilimtulaki > 2){
                    alert("Anak anda termasuk dalam kategori gemuk");
                }
                else if(hasilimtulaki <-3){
                    alert("Anak anda termasuk dalam kategori sangat kurus");
                }
                else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
                    alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median12)/ (sdpositif12-median12) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median12 < 0){
            hasilimtulaki = ((angka-median12)/ (median12-sdnegatif12))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
                hasilimtulaki = ((angka-median13)/ (sdpositif13-median13) )
                alert(hasilimtulaki)
            if(hasilimtulaki > 2){
                alert("Anak anda termasuk dalam kategori gemuk");
            }
            else if(hasilimtulaki <-3){
                alert("Anak anda termasuk dalam kategori sangat kurus");
            }
            else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
                alert("Anak anda termasuk dalam kategori kurus");
            }
            else {
                alert("Anak anda termasuk dalam kategori normal");
            }
            } else if(angka - median13 < 0){
                hasilimtulaki = ((angka-median13)/ (median13-sdnegatif13))
                alert(hasilimtulaki)
            if(hasilimtulaki > 2){
                alert("Anak anda termasuk dalam kategori gemuk");
            }
            else if(hasilimtulaki <-3){
                alert("Anak anda termasuk dalam kategori sangat kurus");
            }
            else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
                alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median14)/ (sdpositif14-median14) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median14 < 0){
            hasilimtulaki = ((angka-median14)/ (median14-sdnegatif14))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median15)/ (sdpositif15-median15) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median15 < 0){
            hasilimtulaki = ((angka-median15)/ (median15-sdnegatif15))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median16)/ (sdpositif16-median16) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median16 < 0){
            hasilimtulaki = ((angka-median16)/ (median16-sdnegatif16))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median17)/ (sdpositif17-median17) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median17 < 0){
            hasilimtulaki = ((angka-median17)/ (median17-sdnegatif17))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median18)/ (sdpositif18-median18) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median18 < 0){
            hasilimtulaki = ((angka-median18)/ (median18-sdnegatif18))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median19)/ (sdpositif19-median19) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median19 < 0){
            hasilimtulaki = ((angka-median19)/ (median19-sdnegatif19))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median20)/ (sdpositif20-median20) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median20 < 0){
            hasilimtulaki = ((angka-median20)/ (median20-sdnegatif20))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median21)/ (sdpositif21-median21) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median21 < 0){
            hasilimtulaki = ((angka-median21)/ (median21-sdnegatif21))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median22)/ (sdpositif22-median22) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median22 < 0){
            hasilimtulaki = ((angka-median22)/ (median22-sdnegatif22))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median23)/ (sdpositif23-median23) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median23 < 0){
            hasilimtulaki = ((angka-median23)/ (median23-sdnegatif23))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median24)/ (sdpositif24-median24) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median24 < 0){
            hasilimtulaki = ((angka-median24)/ (median24-sdnegatif24))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median25)/ (sdpositif25-median25) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median25 < 0){
            hasilimtulaki = ((angka-median25)/ (median25-sdnegatif25))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median26)/ (sdpositif26-median26) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median26 < 0){
            hasilimtulaki = ((angka-median26)/ (median26-sdnegatif26))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median27)/ (sdpositif27-median27) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median27 < 0){
            hasilimtulaki = ((angka-median27)/ (median27-sdnegatif27))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median28)/ (sdpositif28-median28) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median28 < 0){
            hasilimtulaki = ((angka-median28)/ (median28-sdnegatif28))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median29)/ (sdpositif29-median29) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median29 < 0){
            hasilimtulaki = ((angka-median29)/ (median29-sdnegatif29))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median30)/ (sdpositif30-median30) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median30 < 0){
            hasilimtulaki = ((angka-median30)/ (median30-sdnegatif30))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median31)/ (sdpositif31-median31) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median31 < 0){
            hasilimtulaki = ((angka-median31)/ (median31-sdnegatif31))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median32)/ (sdpositif32-median32) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median32 < 0){
            hasilimtulaki = ((angka-median32)/ (median32-sdnegatif32))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median33)/ (sdpositif33-median33) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median33 < 0){
            hasilimtulaki = ((angka-median33)/ (median33-sdnegatif33))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median34)/ (sdpositif34-median34) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median34 < 0){
            hasilimtulaki = ((angka-median34)/ (median34-sdnegatif34))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median35)/ (sdpositif35-median35) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median35 < 0){
            hasilimtulaki = ((angka-median35)/ (median35-sdnegatif35))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median36)/ (sdpositif36-median36) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median36 < 0){
            hasilimtulaki = ((angka-median36)/ (median36-sdnegatif36))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median37)/ (sdpositif37-median37) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median37 < 0){
            hasilimtulaki = ((angka-median37)/ (median37-sdnegatif37))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median38)/ (sdpositif38-median38) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median38 < 0){
            hasilimtulaki = ((angka-median38)/ (median38-sdnegatif38))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median39)/ (sdpositif39-median39) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median39 < 0){
            hasilimtulaki = ((angka-median39)/ (median39-sdnegatif39))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median40)/ (sdpositif40-median40) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median40 < 0){
            hasilimtulaki = ((angka-median40)/ (median40-sdnegatif40))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median41)/ (sdpositif41-median41) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median41 < 0){
            hasilimtulaki = ((angka-median41)/ (median41-sdnegatif41))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median42)/ (sdpositif42-median42) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median42 < 0){
            hasilimtulaki = ((angka-median42)/ (median42-sdnegatif42))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median43)/ (sdpositif43-median43) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median43 < 0){
            hasilimtulaki = ((angka-median43)/ (median43-sdnegatif43))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median44)/ (sdpositif44-median44) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median44 < 0){
            hasilimtulaki = ((angka-median44)/ (median44-sdnegatif44))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median45)/ (sdpositif45-median45) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median45 < 0){
            hasilimtulaki = ((angka-median45)/ (median45-sdnegatif45))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median46)/ (sdpositif46-median46) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median46 < 0){
            hasilimtulaki = ((angka-median46)/ (median46-sdnegatif46))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median47)/ (sdpositif47-median47) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median47 < 0){
            hasilimtulaki = ((angka-median47)/ (median47-sdnegatif47))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median48)/ (sdpositif48-median48) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median48 < 0){
            hasilimtulaki = ((angka-median48)/ (median48-sdnegatif48))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median49)/ (sdpositif49-median49) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median49 < 0){
            hasilimtulaki = ((angka-median49)/ (median49-sdnegatif49))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median50)/ (sdpositif50-median50) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median50 < 0){
            hasilimtulaki = ((angka-median50)/ (median50-sdnegatif50))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median51)/ (sdpositif51-median51) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median51 < 0){
            hasilimtulaki = ((angka-median51)/ (median51-sdnegatif51))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median52)/ (sdpositif52-median52) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median52 < 0){
            hasilimtulaki = ((angka-median52)/ (median52-sdnegatif52))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median53)/ (sdpositif53-median53) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median53 < 0){
            hasilimtulaki = ((angka-median53)/ (median53-sdnegatif53))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median54)/ (sdpositif54-median54) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median54 < 0){
            hasilimtulaki = ((angka-median54)/ (median54-sdnegatif54))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median55)/ (sdpositif55-median55) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median55 < 0){
            hasilimtulaki = ((angka-median55)/ (median55-sdnegatif55))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median56)/ (sdpositif56-median56) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median56 < 0){
            hasilimtulaki = ((angka-median56)/ (median56-sdnegatif56))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median57)/ (sdpositif57-median57) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median57 < 0){
            hasilimtulaki = ((angka-median57)/ (median57-sdnegatif57))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median58)/ (sdpositif58-median58) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median58 < 0){
            hasilimtulaki = ((angka-median58)/ (median58-sdnegatif58))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median59)/ (sdpositif59-median59) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median59 < 0){
            hasilimtulaki = ((angka-median59)/ (median59-sdnegatif59))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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
            hasilimtulaki = ((angka-median60)/ (sdpositif60-median60) )
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median60 < 0){
            hasilimtulaki = ((angka-median60)/ (median60-sdnegatif60))
            alert(hasilimtulaki)
        if(hasilimtulaki > 2){
            alert("Anak anda termasuk dalam kategori gemuk");
        }
        else if(hasilimtulaki <-3){
            alert("Anak anda termasuk dalam kategori sangat kurus");
        }
        else if(hasilimtulaki >= -3 && hasilimtulaki <= -2){
            alert("Anak anda termasuk dalam kategori kurus");
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