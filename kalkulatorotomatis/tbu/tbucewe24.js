//kalkulator otomatis tinggi badan menurut umur cewe 1sd
var vault = prompt("Masukan Umur (Bulan) Putri Anda").toUpperCase();
var angka = prompt("Masukan Tinggi Badan Putri Anda");

var sdpositif0  = 51  ;
var median0     = 49.1  ;
var sdnegatif0  = 47.3  ;

var sdpositif1  =55.6   ;
var median1     = 53.7  ;
var sdnegatif1  = 51.7  ;

var sdpositif2  =  59.1 ;
var median2     =  57.1 ;
var sdnegatif2  = 55  ;

var sdpositif3  =  61.9 ;
var median3     =  59.8 ;
var sdnegatif3  =  57.7 ;

var sdpositif4  = 64.3  ;
var median4     =62.1   ;
var sdnegatif4  =59.9   ;

var sdpositif5  =66.2   ;
var median5     =64   ;
var sdnegatif5  =61.8   ;

var sdpositif6  = 68  ;
var median6     = 65.7  ;
var sdnegatif6  =63.5   ;

var sdpositif7  =  69.6 ;
var median7     =  67.3 ;
var sdnegatif7  = 65  ;

var sdpositif8  = 71.1  ;
var median8     =68.7   ;
var sdnegatif8  = 66.4  ;

var sdpositif9  = 72.6  ;
var median9     = 70.1  ;
var sdnegatif9  = 67.7  ;

var sdpositif10  =73.9   ;
var median10     = 71.5  ;
var sdnegatif10  = 69  ;

var sdpositif11  = 75.3  ;
var median11     = 72.8  ;
var sdnegatif11  = 70.3  ;

var sdpositif12  = 76.6  ;
var median12     = 74  ;
var sdnegatif12  = 71.4  ;

var sdpositif13  = 77.8  ;
var median13     = 75.2  ;
var sdnegatif13  = 72.6  ;

var sdpositif14  =79.1   ;
var median14     = 76.4  ;
var sdnegatif14  = 73.7  ;

var sdpositif15  = 80.2  ;
var median15     = 77.5  ;
var sdnegatif15  = 74.8  ;

var sdpositif16  = 81.4  ;
var median16     =  78.6 ;
var sdnegatif16  = 75.8  ;

var sdpositif17  = 82.5  ;
var median17     = 79.7  ;
var sdnegatif17  = 76.8  ;

var sdpositif18  = 83.6  ;
var median18     = 80.7  ;
var sdnegatif18  = 77.8  ;

var sdpositif19  =84.7   ;
var median19     = 81.7  ;
var sdnegatif19  = 78.8  ;

var sdpositif20  = 85.7  ;
var median20     = 82.7   ;
var sdnegatif20  = 79.7  ;

var sdpositif21  = 86.7  ;
var median21     = 83.7  ;
var sdnegatif21  = 80.6  ;

var sdpositif22  = 87.7  ;
var median22     = 84.6 ;
var sdnegatif22  = 81.5  ;

var sdpositif23  = 88.7  ;
var median23     = 85.5  ;
var sdnegatif23  = 82.3  ;

var sdpositif24  = 89.6  ;
var median24     = 86.4  ;
var sdnegatif24  = 83.2  ;

var sdpositif25  = 89.9  ;
var median25     =  86.6 ;
var sdnegatif25  = 83.3  ;

var sdpositif26  = 90.8  ;
var median26     = 87.4  ;
var sdnegatif26  = 84.1  ;

var sdpositif27  = 91.7  ;
var median27     =  88.3 ;
var sdnegatif27  =  84.9 ;

var sdpositif28  =92.5   ;
var median28     = 89.1  ;
var sdnegatif28  = 85.7  ;

var sdpositif29  = 93.4  ;
var median29     = 89.9  ;
var sdnegatif29  = 86.4  ;

var sdpositif30  = 94.2  ;
var median30     =  90.7 ;
var sdnegatif30  = 87.1  ;

var sdpositif31  =95   ;
var median31     = 91.4  ;
var sdnegatif31  = 87.9  ;

var sdpositif32  =95.8   ;
var median32     =92.2   ;
var sdnegatif32  = 88.6  ;

var sdpositif33  = 96.6  ;
var median33     = 92.9  ;
var sdnegatif33  = 89.3  ;

var sdpositif34  =97.4   ;
var median34     = 93.6  ;
var sdnegatif34  = 89.9  ;

var sdpositif35  =98.1   ;
var median35     =94.4   ;
var sdnegatif35  =90.6   ;

var sdpositif36  =98.9   ;
var median36     =95.1   ;
var sdnegatif36  = 91.2  ;

var sdpositif37  = 99.6  ;
var median37     =95.7   ;
var sdnegatif37  = 91.9  ;

var sdpositif38  = 100.3  ;
var median38     =96.4   ;
var sdnegatif38  = 92.5  ;

var sdpositif39  = 101  ;
var median39     =97.1   ;
var sdnegatif39  = 93.1  ;

var sdpositif40  =101.7   ;
var median40     =97.7   ;
var sdnegatif40  = 93.8  ;

var sdpositif41  = 102.4  ;
var median41     = 98.4  ;
var sdnegatif41  = 94.4  ;

var sdpositif42  = 103.1  ;
var median42     = 99  ;
var sdnegatif42  = 95  ;

var sdpositif43  = 103.8  ;
var median43     = 99.7  ;
var sdnegatif43  = 95.6  ;

var sdpositif44  = 104.5  ;
var median44     = 100.3  ;
var sdnegatif44  = 96.2  ;

var sdpositif45  = 105.1  ;
var median45     = 100.9  ;
var sdnegatif45  = 96.7  ;

var sdpositif46  =105.8   ;
var median46     = 101.5  ;
var sdnegatif46  = 97.3  ;

var sdpositif47  =106.4   ;
var median47     = 102.1  ;
var sdnegatif47  = 97.9  ;

var sdpositif48  =107   ;
var median48     = 102.7  ;
var sdnegatif48  = 98.4  ;

var sdpositif49  =107.7   ;
var median49     = 103.3  ;
var sdnegatif49  = 99  ;

var sdpositif50  =108.3   ;
var median50     = 103.9  ;
var sdnegatif50  =99.5   ;

var sdpositif51  =108.9   ;
var median51     = 104.5  ;
var sdnegatif51  =100.1   ;

var sdpositif52  = 109.5  ;
var median52     = 105  ;
var sdnegatif52  = 100.6  ;

var sdpositif53  = 110.1  ;
var median53     = 105.6  ;
var sdnegatif53  =  101.1 ;

var sdpositif54  = 110.7  ;
var median54     = 106.2  ;
var sdnegatif54  = 101.6  ;

var sdpositif55  =111.3   ;
var median55     = 106.7  ;
var sdnegatif55  = 102.2  ;

var sdpositif56  =111.9   ;
var median56     = 107.3  ;
var sdnegatif56  =102.7   ;

var sdpositif57  =112.5   ;
var median57     =107.8   ;
var sdnegatif57  =103.2   ;

var sdpositif58  =113   ;
var median58    = 108.4  ;
var sdnegatif58  =103.7   ;

var sdpositif59  = 113.6  ;
var median59     = 108.9  ;
var sdnegatif59  = 104.2  ;

var sdpositif60  = 114.2  ;
var median60     = 109.4  ;
var sdnegatif60  = 104.7  ;


switch (vault) {
    case "0":
        if(angka - median0 > 0){
            hasiltbucewe = ((angka-median0)/ (sdpositif0-median0) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median0 < 0){
            hasiltbucewe = ((angka-median0)/ (median0-sdnegatif0))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median1)/ (sdpositif1-median1) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median1 < 0){
            hasiltbucewe = ((angka-median1)/ (median1-sdnegatif1))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median2)/ (sdpositif2-median2) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median2 < 0){
            hasiltbucewe = ((angka-median2)/ (median2-sdnegatif2))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median3)/ (sdpositif3-median3) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median3 < 0){
            hasiltbucewe = ((angka-median3)/ (median3-sdnegatif3))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
        hasiltbucewe = ((angka-median4)/ (sdpositif4-median4) )
        alert(hasiltbucewe)
    if(hasiltbucewe > 2){
        alert("Anak anda termasuk dalam kategori tinggi");
    }
    else if(hasiltbucewe <-3){
        alert("Anak anda termasuk dalam kategori sangat pendek");
    }
    else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
        alert("Anak anda termasuk dalam kategori pendek");
    }
    else {
        alert("Anak anda termasuk dalam kategori normal");
    }
    } else if(angka - median4 < 0){
        hasiltbucewe = ((angka-median4)/ (median4-sdnegatif4))
        alert(hasiltbucewe)
    if(hasiltbucewe > 2){
        alert("Anak anda termasuk dalam kategori tinggi");
    }
    else if(hasiltbucewe <-3){
        alert("Anak anda termasuk dalam kategori sangat pendek");
    }
    else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median5)/ (sdpositif5-median5) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median5 < 0){
            hasiltbucewe = ((angka-median5)/ (median5-sdnegatif5))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
                hasiltbucewe = ((angka-median6)/ (sdpositif6-median6) )
                alert(hasiltbucewe)
            if(hasiltbucewe > 2){
                alert("Anak anda termasuk dalam kategori tinggi");
            }
            else if(hasiltbucewe <-3){
                alert("Anak anda termasuk dalam kategori sangat pendek");
            }
            else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
                alert("Anak anda termasuk dalam kategori pendek");
            }
            else {
                alert("Anak anda termasuk dalam kategori normal");
            }
            } else if(angka - median6 < 0){
                hasiltbucewe = ((angka-median6)/ (median6-sdnegatif6))
                alert(hasiltbucewe)
            if(hasiltbucewe > 2){
                alert("Anak anda termasuk dalam kategori tinggi");
            }
            else if(hasiltbucewe <-3){
                alert("Anak anda termasuk dalam kategori sangat pendek");
            }
            else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
                    hasiltbucewe = ((angka-median7)/ (sdpositif7-median7) )
                    alert(hasiltbucewe)
                if(hasiltbucewe > 2){
                    alert("Anak anda termasuk dalam kategori tinggi");
                }
                else if(hasiltbucewe <-3){
                    alert("Anak anda termasuk dalam kategori sangat pendek");
                }
                else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
                    alert("Anak anda termasuk dalam kategori pendek");
                }
                else {
                    alert("Anak anda termasuk dalam kategori normal");
                }
                } else if(angka - median7 < 0){
                    hasiltbucewe = ((angka-median7)/ (median7-sdnegatif7))
                    alert(hasiltbucewe)
                if(hasiltbucewe > 2){
                    alert("Anak anda termasuk dalam kategori tinggi");
                }
                else if(hasiltbucewe <-3){
                    alert("Anak anda termasuk dalam kategori sangat pendek");
                }
                else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
        hasiltbucewe = ((angka-median8)/ (sdpositif8-median8) )
        alert(hasiltbucewe)
    if(hasiltbucewe > 2){
        alert("Anak anda termasuk dalam kategori tinggi");
    }
    else if(hasiltbucewe <-3){
        alert("Anak anda termasuk dalam kategori sangat pendek");
    }
    else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
        alert("Anak anda termasuk dalam kategori pendek");
    }
    else {
        alert("Anak anda termasuk dalam kategori normal");
    }
    } else if(angka - median8 < 0){
        hasiltbucewe = ((angka-median8)/ (median8-sdnegatif8))
        alert(hasiltbucewe)
    if(hasiltbucewe > 2){
        alert("Anak anda termasuk dalam kategori tinggi");
    }
    else if(hasiltbucewe <-3){
        alert("Anak anda termasuk dalam kategori sangat pendek");
    }
    else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median9)/ (sdpositif9-median9) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median9 < 0){
            hasiltbucewe = ((angka-median9)/ (median9-sdnegatif9))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
                hasiltbucewe = ((angka-median10)/ (sdpositif10-median10) )
                alert(hasiltbucewe)
            if(hasiltbucewe > 2){
                alert("Anak anda termasuk dalam kategori tinggi");
            }
            else if(hasiltbucewe <-3){
                alert("Anak anda termasuk dalam kategori sangat pendek");
            }
            else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
                alert("Anak anda termasuk dalam kategori pendek");
            }
            else {
                alert("Anak anda termasuk dalam kategori normal");
            }
            } else if(angka - median10 < 0){
                hasiltbucewe = ((angka-median10)/ (median10-sdnegatif10))
                alert(hasiltbucewe)
            if(hasiltbucewe > 2){
                alert("Anak anda termasuk dalam kategori tinggi");
            }
            else if(hasiltbucewe <-3){
                alert("Anak anda termasuk dalam kategori sangat pendek");
            }
            else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
                    hasiltbucewe = ((angka-median11)/ (sdpositif11-median11) )
                    alert(hasiltbucewe)
                if(hasiltbucewe > 2){
                    alert("Anak anda termasuk dalam kategori tinggi");
                }
                else if(hasiltbucewe <-3){
                    alert("Anak anda termasuk dalam kategori sangat pendek");
                }
                else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
                    alert("Anak anda termasuk dalam kategori pendek");
                }
                else {
                    alert("Anak anda termasuk dalam kategori normal");
                }
                } else if(angka - median11 < 0){
                    hasiltbucewe = ((angka-median11)/ (median11-sdnegatif11))
                    alert(hasiltbucewe)
                if(hasiltbucewe > 2){
                    alert("Anak anda termasuk dalam kategori tinggi");
                }
                else if(hasiltbucewe <-3){
                    alert("Anak anda termasuk dalam kategori sangat pendek");
                }
                else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median12)/ (sdpositif12-median12) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median12 < 0){
            hasiltbucewe = ((angka-median12)/ (median12-sdnegatif12))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
                hasiltbucewe = ((angka-median13)/ (sdpositif13-median13) )
                alert(hasiltbucewe)
            if(hasiltbucewe > 2){
                alert("Anak anda termasuk dalam kategori tinggi");
            }
            else if(hasiltbucewe <-3){
                alert("Anak anda termasuk dalam kategori sangat pendek");
            }
            else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
                alert("Anak anda termasuk dalam kategori pendek");
            }
            else {
                alert("Anak anda termasuk dalam kategori normal");
            }
            } else if(angka - median13 < 0){
                hasiltbucewe = ((angka-median13)/ (median13-sdnegatif13))
                alert(hasiltbucewe)
            if(hasiltbucewe > 2){
                alert("Anak anda termasuk dalam kategori tinggi");
            }
            else if(hasiltbucewe <-3){
                alert("Anak anda termasuk dalam kategori sangat pendek");
            }
            else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median14)/ (sdpositif14-median14) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median14 < 0){
            hasiltbucewe = ((angka-median14)/ (median14-sdnegatif14))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median15)/ (sdpositif15-median15) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median15 < 0){
            hasiltbucewe = ((angka-median15)/ (median15-sdnegatif15))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median16)/ (sdpositif16-median16) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median16 < 0){
            hasiltbucewe = ((angka-median16)/ (median16-sdnegatif16))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median17)/ (sdpositif17-median17) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median17 < 0){
            hasiltbucewe = ((angka-median17)/ (median17-sdnegatif17))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median18)/ (sdpositif18-median18) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median18 < 0){
            hasiltbucewe = ((angka-median18)/ (median18-sdnegatif18))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median19)/ (sdpositif19-median19) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median19 < 0){
            hasiltbucewe = ((angka-median19)/ (median19-sdnegatif19))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median20)/ (sdpositif20-median20) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median20 < 0){
            hasiltbucewe = ((angka-median20)/ (median20-sdnegatif20))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median21)/ (sdpositif21-median21) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median21 < 0){
            hasiltbucewe = ((angka-median21)/ (median21-sdnegatif21))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median22)/ (sdpositif22-median22) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median22 < 0){
            hasiltbucewe = ((angka-median22)/ (median22-sdnegatif22))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median23)/ (sdpositif23-median23) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median23 < 0){
            hasiltbucewe = ((angka-median23)/ (median23-sdnegatif23))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median24)/ (sdpositif24-median24) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median24 < 0){
            hasiltbucewe = ((angka-median24)/ (median24-sdnegatif24))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median25)/ (sdpositif25-median25) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median25 < 0){
            hasiltbucewe = ((angka-median25)/ (median25-sdnegatif25))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median26)/ (sdpositif26-median26) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median26 < 0){
            hasiltbucewe = ((angka-median26)/ (median26-sdnegatif26))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median27)/ (sdpositif27-median27) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median27 < 0){
            hasiltbucewe = ((angka-median27)/ (median27-sdnegatif27))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median28)/ (sdpositif28-median28) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median28 < 0){
            hasiltbucewe = ((angka-median28)/ (median28-sdnegatif28))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median29)/ (sdpositif29-median29) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median29 < 0){
            hasiltbucewe = ((angka-median29)/ (median29-sdnegatif29))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median30)/ (sdpositif30-median30) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median30 < 0){
            hasiltbucewe = ((angka-median30)/ (median30-sdnegatif30))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median31)/ (sdpositif31-median31) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median31 < 0){
            hasiltbucewe = ((angka-median31)/ (median31-sdnegatif31))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median32)/ (sdpositif32-median32) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median32 < 0){
            hasiltbucewe = ((angka-median32)/ (median32-sdnegatif32))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median33)/ (sdpositif33-median33) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median33 < 0){
            hasiltbucewe = ((angka-median33)/ (median33-sdnegatif33))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median34)/ (sdpositif34-median34) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median34 < 0){
            hasiltbucewe = ((angka-median34)/ (median34-sdnegatif34))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median35)/ (sdpositif35-median35) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median35 < 0){
            hasiltbucewe = ((angka-median35)/ (median35-sdnegatif35))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median36)/ (sdpositif36-median36) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median36 < 0){
            hasiltbucewe = ((angka-median36)/ (median36-sdnegatif36))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median37)/ (sdpositif37-median37) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median37 < 0){
            hasiltbucewe = ((angka-median37)/ (median37-sdnegatif37))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median38)/ (sdpositif38-median38) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median38 < 0){
            hasiltbucewe = ((angka-median38)/ (median38-sdnegatif38))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median39)/ (sdpositif39-median39) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median39 < 0){
            hasiltbucewe = ((angka-median39)/ (median39-sdnegatif39))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median40)/ (sdpositif40-median40) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median40 < 0){
            hasiltbucewe = ((angka-median40)/ (median40-sdnegatif40))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median41)/ (sdpositif41-median41) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median41 < 0){
            hasiltbucewe = ((angka-median41)/ (median41-sdnegatif41))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median42)/ (sdpositif42-median42) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median42 < 0){
            hasiltbucewe = ((angka-median42)/ (median42-sdnegatif42))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median43)/ (sdpositif43-median43) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median43 < 0){
            hasiltbucewe = ((angka-median43)/ (median43-sdnegatif43))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median44)/ (sdpositif44-median44) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median44 < 0){
            hasiltbucewe = ((angka-median44)/ (median44-sdnegatif44))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median45)/ (sdpositif45-median45) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median45 < 0){
            hasiltbucewe = ((angka-median45)/ (median45-sdnegatif45))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median46)/ (sdpositif46-median46) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median46 < 0){
            hasiltbucewe = ((angka-median46)/ (median46-sdnegatif46))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median47)/ (sdpositif47-median47) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median47 < 0){
            hasiltbucewe = ((angka-median47)/ (median47-sdnegatif47))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median48)/ (sdpositif48-median48) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median48 < 0){
            hasiltbucewe = ((angka-median48)/ (median48-sdnegatif48))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median49)/ (sdpositif49-median49) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median49 < 0){
            hasiltbucewe = ((angka-median49)/ (median49-sdnegatif49))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median50)/ (sdpositif50-median50) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median50 < 0){
            hasiltbucewe = ((angka-median50)/ (median50-sdnegatif50))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median51)/ (sdpositif51-median51) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median51 < 0){
            hasiltbucewe = ((angka-median51)/ (median51-sdnegatif51))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median52)/ (sdpositif52-median52) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median52 < 0){
            hasiltbucewe = ((angka-median52)/ (median52-sdnegatif52))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median53)/ (sdpositif53-median53) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median53 < 0){
            hasiltbucewe = ((angka-median53)/ (median53-sdnegatif53))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median54)/ (sdpositif54-median54) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median54 < 0){
            hasiltbucewe = ((angka-median54)/ (median54-sdnegatif54))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median55)/ (sdpositif55-median55) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median55 < 0){
            hasiltbucewe = ((angka-median55)/ (median55-sdnegatif55))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median56)/ (sdpositif56-median56) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median56 < 0){
            hasiltbucewe = ((angka-median56)/ (median56-sdnegatif56))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median57)/ (sdpositif57-median57) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median57 < 0){
            hasiltbucewe = ((angka-median57)/ (median57-sdnegatif57))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median58)/ (sdpositif58-median58) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median58 < 0){
            hasiltbucewe = ((angka-median58)/ (median58-sdnegatif58))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median59)/ (sdpositif59-median59) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median59 < 0){
            hasiltbucewe = ((angka-median59)/ (median59-sdnegatif59))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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
            hasiltbucewe = ((angka-median60)/ (sdpositif60-median60) )
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
            alert("Anak anda termasuk dalam kategori pendek");
        }
        else {
            alert("Anak anda termasuk dalam kategori normal");
        }
        } else if(angka - median60 < 0){
            hasiltbucewe = ((angka-median60)/ (median60-sdnegatif60))
            alert(hasiltbucewe)
        if(hasiltbucewe > 2){
            alert("Anak anda termasuk dalam kategori tinggi");
        }
        else if(hasiltbucewe <-3){
            alert("Anak anda termasuk dalam kategori sangat pendek");
        }
        else if(hasiltbucewe >= -3 && hasiltbucewe <= -2){
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