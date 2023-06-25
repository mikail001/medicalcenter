//kalkulator otomatis berat badan menurut umur anak laki 1sd
var vault = prompt("Masukan Umur (Bulan) Putra Anda").toUpperCase();
var angka = prompt("Masukan Berat Badan Putra Anda");

var sdpositif0 = 3.9;
var sdnegatif0 = 2.9;
var median0 = 3.3;

var sdpositif1 =5.1 ;
var sdnegatif1 =3.9 ;
var median1 =4.5 ;

var sdpositif2 =6.3 ;
var sdnegatif2 =4.9 ;
var median2 = 5.6;

var sdpositif3 =7.2 ;
var sdnegatif3 =5.7 ;
var median3 =6.4 ;

var sdpositif4 =7.8 ;
var sdnegatif4 =6.2 ;
var median4 =7.0 ;

var sdpositif5 =8.4 ;
var sdnegatif5 =6.7 ;
var median5 =7.5 ;

var sdpositif6 =8.8 ;
var sdnegatif6 =7.1 ;
var median6 =7.9 ;

var sdpositif7 =9.2 ;
var sdnegatif7 =7.4 ;
var median7 =8.3 ;

var sdpositif8 =9.6 ;
var sdnegatif8 =7.7 ;
var median8 =8.6 ;

var sdpositif9 =9.9 ;
var sdnegatif9 =8.0 ;
var median9 =8.9 ;

var sdpositif10 =10.2 ;
var sdnegatif10 =8.2 ;
var median10 =9.2 ;

var sdpositif11 =10.5 ;
var sdnegatif11 =8.4 ;
var median11 =9.4 ;

var sdpositif12 =10.8 ;
var sdnegatif12 =8.6 ;
var median12 =9.6 ;

var sdpositif13 =11 ;
var sdnegatif13 =8.8 ;
var median13 =9.9 ;

var sdpositif14 =11.3 ;
var sdnegatif14 =9.0 ;
var median14 =10.1 ;

var sdpositif15 = 11.5;
var sdnegatif15 =9.2 ;
var median15 =10.3 ;

var sdpositif16 =11.7 ;
var sdnegatif16 =9.4 ;
var median16 =10.5 ;

var sdpositif17 =12 ;
var sdnegatif17 =9.6 ;
var median17 =10.7 ;

var sdpositif18 =12.2 ;
var sdnegatif18 =9.8 ;
var median18 =10.9 ;

var sdpositif19 =12.5 ;
var sdnegatif19 =10 ;
var median19 =11.1 ;

var sdpositif20 =12.7 ;
var sdnegatif20 =10.1 ;
var median20 =11.1 ;

var sdpositif21 =12.9 ;
var sdnegatif21 =10.3 ;
var median21 =11.5 ;

var sdpositif22 =13.2 ;
var sdnegatif22 =10.5 ;
var median22 =11.8 ;

var sdpositif23 =13.4 ;
var sdnegatif23 =10.7 ;
var median23 =12 ;

var sdpositif24 =13.6 ;
var sdnegatif24 =10.8 ;
var median24 =12.2 ;

var sdpositif25 =13.9 ;
var sdnegatif25 =11 ;
var median25 =12.4 ;

var sdpositif26 =14.1 ;
var sdnegatif26 =11.2 ;
var median26 =12.5 ;

var sdpositif27 =14.3 ;
var sdnegatif27 =11.3 ;
var median27 =12.7 ;

var sdpositif28 =14.5 ;
var sdnegatif28 =11.5 ;
var median28 =12.9 ;

var sdpositif29 =14.8 ;
var sdnegatif29 =11.7 ;
var median29 =13.1 ;

var sdpositif30 =15 ;
var sdnegatif30 =11.8 ;
var median30 =13.3 ;

var sdpositif31 =15.2 ;
var sdnegatif31 =12 ;
var median31 =13.5 ;

var sdpositif32 =15.4 ;
var sdnegatif32 =12.1 ;
var median32 =13.7 ;

var sdpositif33 =15.6 ;
var sdnegatif33 =12.3 ;
var median33 =13.8 ;

var sdpositif34 =15.8 ;
var sdnegatif34 =12.4 ;
var median34 =14 ;

var sdpositif35 =16 ;
var sdnegatif35 =12.6 ;
var median35 = 14.2 ;

var sdpositif36 =16.2 ;
var sdnegatif36 =12.7 ;
var median36 =14.3 ;

var sdpositif37 =16.4 ;
var sdnegatif37 =12.9 ;
var median37 =14.5 ;

var sdpositif38 =16.6 ;
var sdnegatif38 =13 ;
var median38 =14.7 ;

var sdpositif39 =16.8 ;
var sdnegatif39 =13.1 ;
var median39 =14.8 ;

var sdpositif40 =17 ;
var sdnegatif40 =13.3 ;
var median40 =15 ;

var sdpositif41 =17.2 ;
var sdnegatif41 =13.4 ;
var median41 =15.2 ;

var sdpositif42 =17.4 ;
var sdnegatif42 =13.6 ;
var median42 =15.3 ;

var sdpositif43 =17.6 ;
var sdnegatif43 =13.7 ;
var median43 =15.5 ;

var sdpositif44 =17.8 ;
var sdnegatif44 =13.8 ;
var median44 =15.7 ;

var sdpositif45 =18 ;
var sdnegatif45 =14 ;
var median45 =15.8 ;

var sdpositif46 =18.2 ;
var sdnegatif46 =14.1 ;
var median46 =16 ;

var sdpositif47 =18.4 ;
var sdnegatif47 =14.3 ;
var median47 =16.2 ;

var sdpositif48 =18.6 ;
var sdnegatif48 =14.4 ;
var median48 =16.3 ;

var sdpositif49 =18.8 ;
var sdnegatif49 =14.5 ;
var median49 =16.5 ;

var sdpositif50 =19 ;
var sdnegatif50 =14.7 ;
var median50 =16.7 ;

var sdpositif51 =19.2 ;
var sdnegatif51 =14.8 ;
var median51 =16.8 ;

var sdpositif52 =19.4 ;
var sdnegatif52 =15 ;
var median52 =17 ;

var sdpositif53 =19.6 ;
var sdnegatif53 =15.1 ;
var median53 =17.2 ;

var sdpositif54 =19.8 ;
var sdnegatif54 =15.2 ;
var median54 =17.3 ;

var sdpositif55 =20 ;
var sdnegatif55 =15.4 ;
var median55 =17.5 ;

var sdpositif56 =20.2 ;
var sdnegatif56 =15.5 ;
var median56 =17.7 ;

var sdpositif57 =20.4 ;
var sdnegatif57 =15.6 ;
var median57 =17.8 ;

var sdpositif58 =20.6 ;
var sdnegatif58 =15.8 ;
var median58 =18 ;

var sdpositif59 =20.8 ;
var sdnegatif59 =15.9 ;
var median59 =18.2 ;

var sdpositif60 =21 ;
var sdnegatif60 =16 ;
var median60 =18.3 ;

switch (vault) {
    case "0":
        if(angka - median0 > 0){
            hasilbbulaki = ((angka-median0)/ (sdpositif0-median0) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median0 < 0){
            hasilbbulaki = ((angka-median0)/ (median0-sdnegatif0))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;
    case "1":
        if(angka - median1 > 0){
            hasilbbulaki = ((angka-median1)/ (sdpositif1-median1) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median1 < 0){
            hasilbbulaki = ((angka-median1)/ (median1-sdnegatif1))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;


    case "2":
        if(angka - median2 > 0){
            hasilbbulaki = ((angka-median2)/ (sdpositif2-median2) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median2 < 0){
            hasilbbulaki = ((angka-median2)/ (median2-sdnegatif2))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;
    case "3":
        if(angka - median3 > 0){
            hasilbbulaki = ((angka-median3)/ (sdpositif3-median3) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median3 < 0){
            hasilbbulaki = ((angka-median3)/ (median3-sdnegatif3))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;
        
        
case "4":
    if(angka - median4 > 0){
        hasilbbulaki = ((angka-median4)/ (sdpositif4-median4) )
        alert(hasilbbulaki)
    if(hasilbbulaki > 2){
        alert("Anak anda termasuk dalam kategori gizi lebih");
    }
    else if(hasilbbulaki <-3){
        alert("Anak anda termasuk dalam kategori gizi buruk");
    }
    else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
        alert("Anak anda termasuk dalam kategori gizi kurang");
    }
    else {
        alert("Anak anda termasuk dalam kategori gizi baik");
    }
    } else if(angka - median4 < 0){
        hasilbbulaki = ((angka-median4)/ (median4-sdnegatif4))
        alert(hasilbbulaki)
    if(hasilbbulaki > 2){
        alert("Anak anda termasuk dalam kategori gizi lebih");
    }
    else if(hasilbbulaki <-3){
        alert("Anak anda termasuk dalam kategori gizi buruk");
    }
    else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
        alert("Anak anda termasuk dalam kategori gizi kurang");
    }
    else {
        alert("Anak anda termasuk dalam kategori gizi baik");
    }
    } else {
        alert('Not Available');
    }
    break;



    case "5":
        if(angka - median5 > 0){
            hasilbbulaki = ((angka-median5)/ (sdpositif5-median5) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median5 < 0){
            hasilbbulaki = ((angka-median5)/ (median5-sdnegatif5))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;


        case "6":
            if(angka - median6 > 0){
                hasilbbulaki = ((angka-median6)/ (sdpositif6-median6) )
                alert(hasilbbulaki)
            if(hasilbbulaki > 2){
                alert("Anak anda termasuk dalam kategori gizi lebih");
            }
            else if(hasilbbulaki <-3){
                alert("Anak anda termasuk dalam kategori gizi buruk");
            }
            else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
                alert("Anak anda termasuk dalam kategori gizi kurang");
            }
            else {
                alert("Anak anda termasuk dalam kategori gizi baik");
            }
            } else if(angka - median6 < 0){
                hasilbbulaki = ((angka-median6)/ (median6-sdnegatif6))
                alert(hasilbbulaki)
            if(hasilbbulaki > 2){
                alert("Anak anda termasuk dalam kategori gizi lebih");
            }
            else if(hasilbbulaki <-3){
                alert("Anak anda termasuk dalam kategori gizi buruk");
            }
            else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
                alert("Anak anda termasuk dalam kategori gizi kurang");
            }
            else {
                alert("Anak anda termasuk dalam kategori gizi baik");
            }
            } else {
                alert('Not Available');
            }
            break;
    

            case "7":
                if(angka - median7 > 0){
                    hasilbbulaki = ((angka-median7)/ (sdpositif7-median7) )
                    alert(hasilbbulaki)
                if(hasilbbulaki > 2){
                    alert("Anak anda termasuk dalam kategori gizi lebih");
                }
                else if(hasilbbulaki <-3){
                    alert("Anak anda termasuk dalam kategori gizi buruk");
                }
                else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
                    alert("Anak anda termasuk dalam kategori gizi kurang");
                }
                else {
                    alert("Anak anda termasuk dalam kategori gizi baik");
                }
                } else if(angka - median7 < 0){
                    hasilbbulaki = ((angka-median7)/ (median7-sdnegatif7))
                    alert(hasilbbulaki)
                if(hasilbbulaki > 2){
                    alert("Anak anda termasuk dalam kategori gizi lebih");
                }
                else if(hasilbbulaki <-3){
                    alert("Anak anda termasuk dalam kategori gizi buruk");
                }
                else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
                    alert("Anak anda termasuk dalam kategori gizi kurang");
                }
                else {
                    alert("Anak anda termasuk dalam kategori gizi baik");
                }
                } else {
                    alert('Not Available');
                }
                break;
                
case "8":
    if(angka - median8 > 0){
        hasilbbulaki = ((angka-median8)/ (sdpositif8-median8) )
        alert(hasilbbulaki)
    if(hasilbbulaki > 2){
        alert("Anak anda termasuk dalam kategori gizi lebih");
    }
    else if(hasilbbulaki <-3){
        alert("Anak anda termasuk dalam kategori gizi buruk");
    }
    else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
        alert("Anak anda termasuk dalam kategori gizi kurang");
    }
    else {
        alert("Anak anda termasuk dalam kategori gizi baik");
    }
    } else if(angka - median8 < 0){
        hasilbbulaki = ((angka-median8)/ (median8-sdnegatif8))
        alert(hasilbbulaki)
    if(hasilbbulaki > 2){
        alert("Anak anda termasuk dalam kategori gizi lebih");
    }
    else if(hasilbbulaki <-3){
        alert("Anak anda termasuk dalam kategori gizi buruk");
    }
    else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
        alert("Anak anda termasuk dalam kategori gizi kurang");
    }
    else {
        alert("Anak anda termasuk dalam kategori gizi baik");
    }
    } else {
        alert('Not Available');
    }
    break;


    case "9":
        if(angka - median9 > 0){
            hasilbbulaki = ((angka-median9)/ (sdpositif9-median9) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median9 < 0){
            hasilbbulaki = ((angka-median9)/ (median9-sdnegatif9))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;


        case "10":
            if(angka - median10 > 0){
                hasilbbulaki = ((angka-median10)/ (sdpositif10-median10) )
                alert(hasilbbulaki)
            if(hasilbbulaki > 2){
                alert("Anak anda termasuk dalam kategori gizi lebih");
            }
            else if(hasilbbulaki <-3){
                alert("Anak anda termasuk dalam kategori gizi buruk");
            }
            else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
                alert("Anak anda termasuk dalam kategori gizi kurang");
            }
            else {
                alert("Anak anda termasuk dalam kategori gizi baik");
            }
            } else if(angka - median10 < 0){
                hasilbbulaki = ((angka-median10)/ (median10-sdnegatif10))
                alert(hasilbbulaki)
            if(hasilbbulaki > 2){
                alert("Anak anda termasuk dalam kategori gizi lebih");
            }
            else if(hasilbbulaki <-3){
                alert("Anak anda termasuk dalam kategori gizi buruk");
            }
            else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
                alert("Anak anda termasuk dalam kategori gizi kurang");
            }
            else {
                alert("Anak anda termasuk dalam kategori gizi baik");
            }
            } else {
                alert('Not Available');
            }
            break;
    
            case "11":
                if(angka - median11 > 0){
                    hasilbbulaki = ((angka-median11)/ (sdpositif11-median11) )
                    alert(hasilbbulaki)
                if(hasilbbulaki > 2){
                    alert("Anak anda termasuk dalam kategori gizi lebih");
                }
                else if(hasilbbulaki <-3){
                    alert("Anak anda termasuk dalam kategori gizi buruk");
                }
                else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
                    alert("Anak anda termasuk dalam kategori gizi kurang");
                }
                else {
                    alert("Anak anda termasuk dalam kategori gizi baik");
                }
                } else if(angka - median11 < 0){
                    hasilbbulaki = ((angka-median11)/ (median11-sdnegatif11))
                    alert(hasilbbulaki)
                if(hasilbbulaki > 2){
                    alert("Anak anda termasuk dalam kategori gizi lebih");
                }
                else if(hasilbbulaki <-3){
                    alert("Anak anda termasuk dalam kategori gizi buruk");
                }
                else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
                    alert("Anak anda termasuk dalam kategori gizi kurang");
                }
                else {
                    alert("Anak anda termasuk dalam kategori gizi baik");
                }
                } else {
                    alert('Not Available');
                }
                break;
                
                case "12":
        if(angka - median12 > 0){
            hasilbbulaki = ((angka-median12)/ (sdpositif12-median12) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median12 < 0){
            hasilbbulaki = ((angka-median12)/ (median12-sdnegatif12))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "13":
            if(angka - median13 > 0){
                hasilbbulaki = ((angka-median13)/ (sdpositif13-median13) )
                alert(hasilbbulaki)
            if(hasilbbulaki > 2){
                alert("Anak anda termasuk dalam kategori gizi lebih");
            }
            else if(hasilbbulaki <-3){
                alert("Anak anda termasuk dalam kategori gizi buruk");
            }
            else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
                alert("Anak anda termasuk dalam kategori gizi kurang");
            }
            else {
                alert("Anak anda termasuk dalam kategori gizi baik");
            }
            } else if(angka - median13 < 0){
                hasilbbulaki = ((angka-median13)/ (median13-sdnegatif13))
                alert(hasilbbulaki)
            if(hasilbbulaki > 2){
                alert("Anak anda termasuk dalam kategori gizi lebih");
            }
            else if(hasilbbulaki <-3){
                alert("Anak anda termasuk dalam kategori gizi buruk");
            }
            else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
                alert("Anak anda termasuk dalam kategori gizi kurang");
            }
            else {
                alert("Anak anda termasuk dalam kategori gizi baik");
            }
            } else {
                alert('Not Available');
            }
            break;

            case "14":
        if(angka - median14 > 0){
            hasilbbulaki = ((angka-median14)/ (sdpositif14-median14) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median14 < 0){
            hasilbbulaki = ((angka-median14)/ (median14-sdnegatif14))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "15":
        if(angka - median15 > 0){
            hasilbbulaki = ((angka-median15)/ (sdpositif15-median15) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median15 < 0){
            hasilbbulaki = ((angka-median15)/ (median15-sdnegatif15))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "16":
        if(angka - median16 > 0){
            hasilbbulaki = ((angka-median16)/ (sdpositif16-median16) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median16 < 0){
            hasilbbulaki = ((angka-median16)/ (median16-sdnegatif16))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "17":
        if(angka - median17 > 0){
            hasilbbulaki = ((angka-median17)/ (sdpositif17-median17) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median17 < 0){
            hasilbbulaki = ((angka-median17)/ (median17-sdnegatif17))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "18":
        if(angka - median18 > 0){
            hasilbbulaki = ((angka-median18)/ (sdpositif18-median18) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median18 < 0){
            hasilbbulaki = ((angka-median18)/ (median18-sdnegatif18))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "19":
        if(angka - median19 > 0){
            hasilbbulaki = ((angka-median19)/ (sdpositif19-median19) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median19 < 0){
            hasilbbulaki = ((angka-median19)/ (median19-sdnegatif19))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "20":
        if(angka - median20 > 0){
            hasilbbulaki = ((angka-median20)/ (sdpositif20-median20) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median20 < 0){
            hasilbbulaki = ((angka-median20)/ (median20-sdnegatif20))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "21":
        if(angka - median21 > 0){
            hasilbbulaki = ((angka-median21)/ (sdpositif21-median21) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median21 < 0){
            hasilbbulaki = ((angka-median21)/ (median21-sdnegatif21))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "22":
        if(angka - median22 > 0){
            hasilbbulaki = ((angka-median22)/ (sdpositif22-median22) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median22 < 0){
            hasilbbulaki = ((angka-median22)/ (median22-sdnegatif22))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "23":
        if(angka - median23 > 0){
            hasilbbulaki = ((angka-median23)/ (sdpositif23-median23) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median23 < 0){
            hasilbbulaki = ((angka-median23)/ (median23-sdnegatif23))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "24":
        if(angka - median24 > 0){
            hasilbbulaki = ((angka-median24)/ (sdpositif24-median24) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median24 < 0){
            hasilbbulaki = ((angka-median24)/ (median24-sdnegatif24))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "25":
        if(angka - median25 > 0){
            hasilbbulaki = ((angka-median25)/ (sdpositif25-median25) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median25 < 0){
            hasilbbulaki = ((angka-median25)/ (median25-sdnegatif25))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "26":
        if(angka - median26 > 0){
            hasilbbulaki = ((angka-median26)/ (sdpositif26-median26) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median26 < 0){
            hasilbbulaki = ((angka-median26)/ (median26-sdnegatif26))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "27":
        if(angka - median27 > 0){
            hasilbbulaki = ((angka-median27)/ (sdpositif27-median27) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median27 < 0){
            hasilbbulaki = ((angka-median27)/ (median27-sdnegatif27))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "28":
        if(angka - median28 > 0){
            hasilbbulaki = ((angka-median28)/ (sdpositif28-median28) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median28 < 0){
            hasilbbulaki = ((angka-median28)/ (median28-sdnegatif28))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "29":
        if(angka - median29 > 0){
            hasilbbulaki = ((angka-median29)/ (sdpositif29-median29) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median29 < 0){
            hasilbbulaki = ((angka-median29)/ (median29-sdnegatif29))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "30":
        if(angka - median30 > 0){
            hasilbbulaki = ((angka-median30)/ (sdpositif30-median30) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median30 < 0){
            hasilbbulaki = ((angka-median30)/ (median30-sdnegatif30))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "31":
        if(angka - median31 > 0){
            hasilbbulaki = ((angka-median31)/ (sdpositif31-median31) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median31 < 0){
            hasilbbulaki = ((angka-median31)/ (median31-sdnegatif31))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "32":
        if(angka - median32 > 0){
            hasilbbulaki = ((angka-median32)/ (sdpositif32-median32) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median32 < 0){
            hasilbbulaki = ((angka-median32)/ (median32-sdnegatif32))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "33":
        if(angka - median33 > 0){
            hasilbbulaki = ((angka-median33)/ (sdpositif33-median33) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median33 < 0){
            hasilbbulaki = ((angka-median33)/ (median33-sdnegatif33))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "34":
        if(angka - median34 > 0){
            hasilbbulaki = ((angka-median34)/ (sdpositif34-median34) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median34 < 0){
            hasilbbulaki = ((angka-median34)/ (median34-sdnegatif34))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "35":
        if(angka - median35 > 0){
            hasilbbulaki = ((angka-median35)/ (sdpositif35-median35) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median35 < 0){
            hasilbbulaki = ((angka-median35)/ (median35-sdnegatif35))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "36":
        if(angka - median36 > 0){
            hasilbbulaki = ((angka-median36)/ (sdpositif36-median36) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median36 < 0){
            hasilbbulaki = ((angka-median36)/ (median36-sdnegatif36))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "37":
        if(angka - median37 > 0){
            hasilbbulaki = ((angka-median37)/ (sdpositif37-median37) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median37 < 0){
            hasilbbulaki = ((angka-median37)/ (median37-sdnegatif37))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "38":
        if(angka - median38 > 0){
            hasilbbulaki = ((angka-median38)/ (sdpositif38-median38) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median38 < 0){
            hasilbbulaki = ((angka-median38)/ (median38-sdnegatif38))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "39":
        if(angka - median39 > 0){
            hasilbbulaki = ((angka-median39)/ (sdpositif39-median39) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median39 < 0){
            hasilbbulaki = ((angka-median39)/ (median39-sdnegatif39))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "40":
        if(angka - median40 > 0){
            hasilbbulaki = ((angka-median40)/ (sdpositif40-median40) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median40 < 0){
            hasilbbulaki = ((angka-median40)/ (median40-sdnegatif40))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "41":
        if(angka - median41 > 0){
            hasilbbulaki = ((angka-median41)/ (sdpositif41-median41) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median41 < 0){
            hasilbbulaki = ((angka-median41)/ (median41-sdnegatif41))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "42":
        if(angka - median42 > 0){
            hasilbbulaki = ((angka-median42)/ (sdpositif42-median42) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median42 < 0){
            hasilbbulaki = ((angka-median42)/ (median42-sdnegatif42))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "43":
        if(angka - median43 > 0){
            hasilbbulaki = ((angka-median43)/ (sdpositif43-median43) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median43 < 0){
            hasilbbulaki = ((angka-median43)/ (median43-sdnegatif43))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "44":
        if(angka - median44 > 0){
            hasilbbulaki = ((angka-median44)/ (sdpositif44-median44) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median44 < 0){
            hasilbbulaki = ((angka-median44)/ (median44-sdnegatif44))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "45":
        if(angka - median45 > 0){
            hasilbbulaki = ((angka-median45)/ (sdpositif45-median45) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median45 < 0){
            hasilbbulaki = ((angka-median45)/ (median45-sdnegatif45))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "46":
        if(angka - median46 > 0){
            hasilbbulaki = ((angka-median46)/ (sdpositif46-median46) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median46 < 0){
            hasilbbulaki = ((angka-median46)/ (median46-sdnegatif46))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "47":
        if(angka - median47 > 0){
            hasilbbulaki = ((angka-median47)/ (sdpositif47-median47) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median47 < 0){
            hasilbbulaki = ((angka-median47)/ (median47-sdnegatif47))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "48":
        if(angka - median48 > 0){
            hasilbbulaki = ((angka-median48)/ (sdpositif48-median48) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median48 < 0){
            hasilbbulaki = ((angka-median48)/ (median48-sdnegatif48))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "49":
        if(angka - median49 > 0){
            hasilbbulaki = ((angka-median49)/ (sdpositif49-median49) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median49 < 0){
            hasilbbulaki = ((angka-median49)/ (median49-sdnegatif49))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "50":
        if(angka - median50 > 0){
            hasilbbulaki = ((angka-median50)/ (sdpositif50-median50) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median50 < 0){
            hasilbbulaki = ((angka-median50)/ (median50-sdnegatif50))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "51":
        if(angka - median51 > 0){
            hasilbbulaki = ((angka-median51)/ (sdpositif51-median51) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median51 < 0){
            hasilbbulaki = ((angka-median51)/ (median51-sdnegatif51))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "52":
        if(angka - median52 > 0){
            hasilbbulaki = ((angka-median52)/ (sdpositif52-median52) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median52 < 0){
            hasilbbulaki = ((angka-median52)/ (median52-sdnegatif52))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "53":
        if(angka - median53 > 0){
            hasilbbulaki = ((angka-median53)/ (sdpositif53-median53) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median53 < 0){
            hasilbbulaki = ((angka-median53)/ (median53-sdnegatif53))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "54":
        if(angka - median54 > 0){
            hasilbbulaki = ((angka-median54)/ (sdpositif54-median54) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median54 < 0){
            hasilbbulaki = ((angka-median54)/ (median54-sdnegatif54))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "55":
        if(angka - median55 > 0){
            hasilbbulaki = ((angka-median55)/ (sdpositif55-median55) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median55 < 0){
            hasilbbulaki = ((angka-median55)/ (median55-sdnegatif55))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "56":
        if(angka - median56 > 0){
            hasilbbulaki = ((angka-median56)/ (sdpositif56-median56) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median56 < 0){
            hasilbbulaki = ((angka-median56)/ (median56-sdnegatif56))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "57":
        if(angka - median57 > 0){
            hasilbbulaki = ((angka-median57)/ (sdpositif57-median57) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median57 < 0){
            hasilbbulaki = ((angka-median57)/ (median57-sdnegatif57))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "58":
        if(angka - median58 > 0){
            hasilbbulaki = ((angka-median58)/ (sdpositif58-median58) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median58 < 0){
            hasilbbulaki = ((angka-median58)/ (median58-sdnegatif58))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "59":
        if(angka - median59 > 0){
            hasilbbulaki = ((angka-median59)/ (sdpositif59-median59) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median59 < 0){
            hasilbbulaki = ((angka-median59)/ (median59-sdnegatif59))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;

        case "60":
        if(angka - median60 > 0){
            hasilbbulaki = ((angka-median60)/ (sdpositif60-median60) )
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median60 < 0){
            hasilbbulaki = ((angka-median60)/ (median60-sdnegatif60))
            alert(hasilbbulaki)
        if(hasilbbulaki > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasilbbulaki <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasilbbulaki >= -3 && hasilbbulaki <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else {
            alert('Not Available');
        }
        break;
    default:
       console.log("The vault " + vault + " is not known!!");
        
}
