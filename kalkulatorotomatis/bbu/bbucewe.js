//kalkulator otomatis berat badan menurut umur anak perempuan 1sd
var vault = prompt("Masukan Umur (Bulan) Putri Anda").toUpperCase();
var angka = prompt("Masukan Berat Badan Putri Anda");

var sdpositif0 = 3.7;
var sdnegatif0 = 2.8;
var median0 = 3.2;

var sdpositif1 =4.8 ;
var sdnegatif1 =3.6 ;
var median1 =4.2 ;

var sdpositif2 =5.8 ;
var sdnegatif2 =4.5 ;
var median2 = 5.1;

var sdpositif3 =6.6 ;
var sdnegatif3 =5.2 ;
var median3 =5.8 ;

var sdpositif4 =7.3 ;
var sdnegatif4 =5.7 ;
var median4 =6.4 ;

var sdpositif5 =7.8 ;
var sdnegatif5 =6.1 ;
var median5 =6.9 ;

var sdpositif6 =8.2 ;
var sdnegatif6 =6.5 ;
var median6 =7.3 ;

var sdpositif7 =8.6 ;
var sdnegatif7 =6.8 ;
var median7 =7.6 ;

var sdpositif8 =9.0 ;
var sdnegatif8 =7.0 ;
var median8 =7.9 ;

var sdpositif9 =9.3 ;
var sdnegatif9 =7.3 ;
var median9 =8.2 ;

var sdpositif10 =9.6 ;
var sdnegatif10 =7.5 ;
var median10 =8.5 ;

var sdpositif11 =9.9 ;
var sdnegatif11 =7.7 ;
var median11 =8.7 ;

var sdpositif12 =10.1 ;
var sdnegatif12 =7.9 ;
var median12 =8.9 ;

var sdpositif13 =10.4 ;
var sdnegatif13 =8.1 ;
var median13 =9.2 ;

var sdpositif14 =10.6 ;
var sdnegatif14 =8.3 ;
var median14 =9.4 ;

var sdpositif15 = 10.9;
var sdnegatif15 =8.5;
var median15 =9.6 ;

var sdpositif16 =11.1 ;
var sdnegatif16 =8.7 ;
var median16 =9.8;

var sdpositif17 =11.4 ;
var sdnegatif17 =8.9 ;
var median17 =10 ;

var sdpositif18 =11.6 ;
var sdnegatif18 =9.1 ;
var median18 =10.2 ;

var sdpositif19 =11.8 ;
var sdnegatif19 =9.2 ;
var median19 =10.4 ;

var sdpositif20 =12.1 ;
var sdnegatif20 =9.4 ;
var median20 =10.6 ;

var sdpositif21 =12.3 ;
var sdnegatif21 =9.6 ;
var median21 =10.9 ;

var sdpositif22 =12.5 ;
var sdnegatif22 =9.8 ;
var median22 =11.1 ;

var sdpositif23 =12.8 ;
var sdnegatif23 =10 ;
var median23 =11.3 ;

var sdpositif24 =13 ;
var sdnegatif24 =10.2 ;
var median24 =11.5 ;

var sdpositif25 =13.3 ;
var sdnegatif25 =10.3 ;
var median25 =11.7 ;

var sdpositif26 =13.5 ;
var sdnegatif26 =10.5 ;
var median26 =11.9 ;

var sdpositif27 =13.7 ;
var sdnegatif27 =10.7 ;
var median27 =12.1 ;

var sdpositif28 =14 ;
var sdnegatif28 =10.9 ;
var median28 =12.3 ;

var sdpositif29 =14.2 ;
var sdnegatif29 =11.1 ;
var median29 =12.5 ;

var sdpositif30 =14.4 ;
var sdnegatif30 =11.2 ;
var median30 =12.7 ;

var sdpositif31 =14.7 ;
var sdnegatif31 =11.4 ;
var median31 =12.9 ;

var sdpositif32 =14.9 ;
var sdnegatif32 =11.6 ;
var median32 =13.1 ;

var sdpositif33 =15.1 ;
var sdnegatif33 =11.7 ;
var median33 =13.3 ;

var sdpositif34 =15.4 ;
var sdnegatif34 =11.9 ;
var median34 =13.5 ;

var sdpositif35 =15.6 ;
var sdnegatif35 =12 ;
var median35 = 13.7 ;

var sdpositif36 =15.8 ;
var sdnegatif36 =12.2 ;
var median36 =13.9 ;

var sdpositif37 =16 ;
var sdnegatif37 =12.4 ;
var median37 =14 ;

var sdpositif38 =16.3 ;
var sdnegatif38 =12.5 ;
var median38 =14.2 ;

var sdpositif39 =16.5 ;
var sdnegatif39 =12.7 ;
var median39 =14.4 ;

var sdpositif40 =16.7 ;
var sdnegatif40 =12.8 ;
var median40 =14.6 ;

var sdpositif41 =16.9 ;
var sdnegatif41 =13 ;
var median41 =14.8 ;

var sdpositif42 =17.2 ;
var sdnegatif42 =13.1 ;
var median42 =15 ;

var sdpositif43 =17.4 ;
var sdnegatif43 =13.3 ;
var median43 =15.2 ;

var sdpositif44 =17.6 ;
var sdnegatif44 =13.4 ;
var median44 =15.3 ;

var sdpositif45 =17.8 ;
var sdnegatif45 =13.6 ;
var median45 =15.5 ;

var sdpositif46 =18.1 ;
var sdnegatif46 =13.7 ;
var median46 =15.7 ;

var sdpositif47 =18.3 ;
var sdnegatif47 =13.9 ;
var median47 =15.9 ;

var sdpositif48 =18.5 ;
var sdnegatif48 =14 ;
var median48 =16.1 ;

var sdpositif49 =18.8 ;
var sdnegatif49 =14.2 ;
var median49 =16.3 ;

var sdpositif50 =19 ;
var sdnegatif50 =14.3;
var median50 =16.4 ;

var sdpositif51 =19.2 ;
var sdnegatif51 =14.5 ;
var median51 =16.6 ;

var sdpositif52 =19.4 ;
var sdnegatif52 =14.6 ;
var median52 =16.8 ;

var sdpositif53 =19.7 ;
var sdnegatif53 =14.8 ;
var median53 =17 ;

var sdpositif54 =19.9 ;
var sdnegatif54 =14.9 ;
var median54 =17.2 ;

var sdpositif55 =20.1 ;
var sdnegatif55 =15.1 ;
var median55 =17.3 ;

var sdpositif56 =20.3 ;
var sdnegatif56 =15.2 ;
var median56 =17.5 ;

var sdpositif57 =20.6 ;
var sdnegatif57 =15.3 ;
var median57 =17.7 ;

var sdpositif58 =20.8 ;
var sdnegatif58 =15.5 ;
var median58 =17.9 ;

var sdpositif59 =21 ;
var sdnegatif59 =15.6 ;
var median59 =18 ;

var sdpositif60 =22.2 ;
var sdnegatif60 =15.8 ;
var median60 =18.2 ;

switch (vault) {
    case "0":
        if(angka - median0 > 0){
            hasil = ((angka-median0)/ (sdpositif0-median0) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median0 < 0){
            hasil = ((angka-median0)/ (median0-sdnegatif0))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median1)/ (sdpositif1-median1) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median1 < 0){
            hasil = ((angka-median1)/ (median1-sdnegatif1))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median2)/ (sdpositif2-median2) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median2 < 0){
            hasil = ((angka-median2)/ (median2-sdnegatif2))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median3)/ (sdpositif3-median3) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median3 < 0){
            hasil = ((angka-median3)/ (median3-sdnegatif3))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
        hasil = ((angka-median4)/ (sdpositif4-median4) )
        alert(hasil)
    if(hasil > 2){
        alert("Anak anda termasuk dalam kategori gizi lebih");
    }
    else if(hasil <-3){
        alert("Anak anda termasuk dalam kategori gizi buruk");
    }
    else if(hasil >= -3 && hasil <= -2){
        alert("Anak anda termasuk dalam kategori gizi kurang");
    }
    else {
        alert("Anak anda termasuk dalam kategori gizi baik");
    }
    } else if(angka - median4 < 0){
        hasil = ((angka-median4)/ (median4-sdnegatif4))
        alert(hasil)
    if(hasil > 2){
        alert("Anak anda termasuk dalam kategori gizi lebih");
    }
    else if(hasil <-3){
        alert("Anak anda termasuk dalam kategori gizi buruk");
    }
    else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median5)/ (sdpositif5-median5) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median5 < 0){
            hasil = ((angka-median5)/ (median5-sdnegatif5))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
                hasil = ((angka-median6)/ (sdpositif6-median6) )
                alert(hasil)
            if(hasil > 2){
                alert("Anak anda termasuk dalam kategori gizi lebih");
            }
            else if(hasil <-3){
                alert("Anak anda termasuk dalam kategori gizi buruk");
            }
            else if(hasil >= -3 && hasil <= -2){
                alert("Anak anda termasuk dalam kategori gizi kurang");
            }
            else {
                alert("Anak anda termasuk dalam kategori gizi baik");
            }
            } else if(angka - median6 < 0){
                hasil = ((angka-median6)/ (median6-sdnegatif6))
                alert(hasil)
            if(hasil > 2){
                alert("Anak anda termasuk dalam kategori gizi lebih");
            }
            else if(hasil <-3){
                alert("Anak anda termasuk dalam kategori gizi buruk");
            }
            else if(hasil >= -3 && hasil <= -2){
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
                    hasil = ((angka-median7)/ (sdpositif7-median7) )
                    alert(hasil)
                if(hasil > 2){
                    alert("Anak anda termasuk dalam kategori gizi lebih");
                }
                else if(hasil <-3){
                    alert("Anak anda termasuk dalam kategori gizi buruk");
                }
                else if(hasil >= -3 && hasil <= -2){
                    alert("Anak anda termasuk dalam kategori gizi kurang");
                }
                else {
                    alert("Anak anda termasuk dalam kategori gizi baik");
                }
                } else if(angka - median7 < 0){
                    hasil = ((angka-median7)/ (median7-sdnegatif7))
                    alert(hasil)
                if(hasil > 2){
                    alert("Anak anda termasuk dalam kategori gizi lebih");
                }
                else if(hasil <-3){
                    alert("Anak anda termasuk dalam kategori gizi buruk");
                }
                else if(hasil >= -3 && hasil <= -2){
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
        hasil = ((angka-median8)/ (sdpositif8-median8) )
        alert(hasil)
    if(hasil > 2){
        alert("Anak anda termasuk dalam kategori gizi lebih");
    }
    else if(hasil <-3){
        alert("Anak anda termasuk dalam kategori gizi buruk");
    }
    else if(hasil >= -3 && hasil <= -2){
        alert("Anak anda termasuk dalam kategori gizi kurang");
    }
    else {
        alert("Anak anda termasuk dalam kategori gizi baik");
    }
    } else if(angka - median8 < 0){
        hasil = ((angka-median8)/ (median8-sdnegatif8))
        alert(hasil)
    if(hasil > 2){
        alert("Anak anda termasuk dalam kategori gizi lebih");
    }
    else if(hasil <-3){
        alert("Anak anda termasuk dalam kategori gizi buruk");
    }
    else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median9)/ (sdpositif9-median9) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median9 < 0){
            hasil = ((angka-median9)/ (median9-sdnegatif9))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
                hasil = ((angka-median10)/ (sdpositif10-median10) )
                alert(hasil)
            if(hasil > 2){
                alert("Anak anda termasuk dalam kategori gizi lebih");
            }
            else if(hasil <-3){
                alert("Anak anda termasuk dalam kategori gizi buruk");
            }
            else if(hasil >= -3 && hasil <= -2){
                alert("Anak anda termasuk dalam kategori gizi kurang");
            }
            else {
                alert("Anak anda termasuk dalam kategori gizi baik");
            }
            } else if(angka - median10 < 0){
                hasil = ((angka-median10)/ (median10-sdnegatif10))
                alert(hasil)
            if(hasil > 2){
                alert("Anak anda termasuk dalam kategori gizi lebih");
            }
            else if(hasil <-3){
                alert("Anak anda termasuk dalam kategori gizi buruk");
            }
            else if(hasil >= -3 && hasil <= -2){
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
                    hasil = ((angka-median11)/ (sdpositif11-median11) )
                    alert(hasil)
                if(hasil > 2){
                    alert("Anak anda termasuk dalam kategori gizi lebih");
                }
                else if(hasil <-3){
                    alert("Anak anda termasuk dalam kategori gizi buruk");
                }
                else if(hasil >= -3 && hasil <= -2){
                    alert("Anak anda termasuk dalam kategori gizi kurang");
                }
                else {
                    alert("Anak anda termasuk dalam kategori gizi baik");
                }
                } else if(angka - median11 < 0){
                    hasil = ((angka-median11)/ (median11-sdnegatif11))
                    alert(hasil)
                if(hasil > 2){
                    alert("Anak anda termasuk dalam kategori gizi lebih");
                }
                else if(hasil <-3){
                    alert("Anak anda termasuk dalam kategori gizi buruk");
                }
                else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median12)/ (sdpositif12-median12) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median12 < 0){
            hasil = ((angka-median12)/ (median12-sdnegatif12))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
                hasil = ((angka-median13)/ (sdpositif13-median13) )
                alert(hasil)
            if(hasil > 2){
                alert("Anak anda termasuk dalam kategori gizi lebih");
            }
            else if(hasil <-3){
                alert("Anak anda termasuk dalam kategori gizi buruk");
            }
            else if(hasil >= -3 && hasil <= -2){
                alert("Anak anda termasuk dalam kategori gizi kurang");
            }
            else {
                alert("Anak anda termasuk dalam kategori gizi baik");
            }
            } else if(angka - median13 < 0){
                hasil = ((angka-median13)/ (median13-sdnegatif13))
                alert(hasil)
            if(hasil > 2){
                alert("Anak anda termasuk dalam kategori gizi lebih");
            }
            else if(hasil <-3){
                alert("Anak anda termasuk dalam kategori gizi buruk");
            }
            else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median14)/ (sdpositif14-median14) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median14 < 0){
            hasil = ((angka-median14)/ (median14-sdnegatif14))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median15)/ (sdpositif15-median15) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median15 < 0){
            hasil = ((angka-median15)/ (median15-sdnegatif15))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median16)/ (sdpositif16-median16) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median16 < 0){
            hasil = ((angka-median16)/ (median16-sdnegatif16))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median17)/ (sdpositif17-median17) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median17 < 0){
            hasil = ((angka-median17)/ (median17-sdnegatif17))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median18)/ (sdpositif18-median18) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median18 < 0){
            hasil = ((angka-median18)/ (median18-sdnegatif18))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median19)/ (sdpositif19-median19) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median19 < 0){
            hasil = ((angka-median19)/ (median19-sdnegatif19))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median20)/ (sdpositif20-median20) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median20 < 0){
            hasil = ((angka-median20)/ (median20-sdnegatif20))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median21)/ (sdpositif21-median21) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median21 < 0){
            hasil = ((angka-median21)/ (median21-sdnegatif21))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median22)/ (sdpositif22-median22) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median22 < 0){
            hasil = ((angka-median22)/ (median22-sdnegatif22))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median23)/ (sdpositif23-median23) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median23 < 0){
            hasil = ((angka-median23)/ (median23-sdnegatif23))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median24)/ (sdpositif24-median24) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median24 < 0){
            hasil = ((angka-median24)/ (median24-sdnegatif24))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median25)/ (sdpositif25-median25) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median25 < 0){
            hasil = ((angka-median25)/ (median25-sdnegatif25))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median26)/ (sdpositif26-median26) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median26 < 0){
            hasil = ((angka-median26)/ (median26-sdnegatif26))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median27)/ (sdpositif27-median27) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median27 < 0){
            hasil = ((angka-median27)/ (median27-sdnegatif27))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median28)/ (sdpositif28-median28) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median28 < 0){
            hasil = ((angka-median28)/ (median28-sdnegatif28))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median29)/ (sdpositif29-median29) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median29 < 0){
            hasil = ((angka-median29)/ (median29-sdnegatif29))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median30)/ (sdpositif30-median30) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median30 < 0){
            hasil = ((angka-median30)/ (median30-sdnegatif30))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median31)/ (sdpositif31-median31) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median31 < 0){
            hasil = ((angka-median31)/ (median31-sdnegatif31))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median32)/ (sdpositif32-median32) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median32 < 0){
            hasil = ((angka-median32)/ (median32-sdnegatif32))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median33)/ (sdpositif33-median33) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median33 < 0){
            hasil = ((angka-median33)/ (median33-sdnegatif33))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median34)/ (sdpositif34-median34) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median34 < 0){
            hasil = ((angka-median34)/ (median34-sdnegatif34))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median35)/ (sdpositif35-median35) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median35 < 0){
            hasil = ((angka-median35)/ (median35-sdnegatif35))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median36)/ (sdpositif36-median36) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median36 < 0){
            hasil = ((angka-median36)/ (median36-sdnegatif36))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median37)/ (sdpositif37-median37) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median37 < 0){
            hasil = ((angka-median37)/ (median37-sdnegatif37))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median38)/ (sdpositif38-median38) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median38 < 0){
            hasil = ((angka-median38)/ (median38-sdnegatif38))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median39)/ (sdpositif39-median39) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median39 < 0){
            hasil = ((angka-median39)/ (median39-sdnegatif39))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median40)/ (sdpositif40-median40) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median40 < 0){
            hasil = ((angka-median40)/ (median40-sdnegatif40))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median41)/ (sdpositif41-median41) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median41 < 0){
            hasil = ((angka-median41)/ (median41-sdnegatif41))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median42)/ (sdpositif42-median42) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median42 < 0){
            hasil = ((angka-median42)/ (median42-sdnegatif42))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median43)/ (sdpositif43-median43) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median43 < 0){
            hasil = ((angka-median43)/ (median43-sdnegatif43))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median44)/ (sdpositif44-median44) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median44 < 0){
            hasil = ((angka-median44)/ (median44-sdnegatif44))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median45)/ (sdpositif45-median45) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median45 < 0){
            hasil = ((angka-median45)/ (median45-sdnegatif45))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median46)/ (sdpositif46-median46) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median46 < 0){
            hasil = ((angka-median46)/ (median46-sdnegatif46))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median47)/ (sdpositif47-median47) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median47 < 0){
            hasil = ((angka-median47)/ (median47-sdnegatif47))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median48)/ (sdpositif48-median48) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median48 < 0){
            hasil = ((angka-median48)/ (median48-sdnegatif48))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median49)/ (sdpositif49-median49) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median49 < 0){
            hasil = ((angka-median49)/ (median49-sdnegatif49))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median50)/ (sdpositif50-median50) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median50 < 0){
            hasil = ((angka-median50)/ (median50-sdnegatif50))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median51)/ (sdpositif51-median51) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median51 < 0){
            hasil = ((angka-median51)/ (median51-sdnegatif51))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median52)/ (sdpositif52-median52) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median52 < 0){
            hasil = ((angka-median52)/ (median52-sdnegatif52))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median53)/ (sdpositif53-median53) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median53 < 0){
            hasil = ((angka-median53)/ (median53-sdnegatif53))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median54)/ (sdpositif54-median54) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median54 < 0){
            hasil = ((angka-median54)/ (median54-sdnegatif54))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median55)/ (sdpositif55-median55) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median55 < 0){
            hasil = ((angka-median55)/ (median55-sdnegatif55))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median56)/ (sdpositif56-median56) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median56 < 0){
            hasil = ((angka-median56)/ (median56-sdnegatif56))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median57)/ (sdpositif57-median57) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median57 < 0){
            hasil = ((angka-median57)/ (median57-sdnegatif57))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median58)/ (sdpositif58-median58) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median58 < 0){
            hasil = ((angka-median58)/ (median58-sdnegatif58))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median59)/ (sdpositif59-median59) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median59 < 0){
            hasil = ((angka-median59)/ (median59-sdnegatif59))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
            hasil = ((angka-median60)/ (sdpositif60-median60) )
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
            alert("Anak anda termasuk dalam kategori gizi kurang");
        }
        else {
            alert("Anak anda termasuk dalam kategori gizi baik");
        }
        } else if(angka - median60 < 0){
            hasil = ((angka-median60)/ (median60-sdnegatif60))
            alert(hasil)
        if(hasil > 2){
            alert("Anak anda termasuk dalam kategori gizi lebih");
        }
        else if(hasil <-3){
            alert("Anak anda termasuk dalam kategori gizi buruk");
        }
        else if(hasil >= -3 && hasil <= -2){
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
