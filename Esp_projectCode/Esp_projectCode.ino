  #include <WiFi.h>
  #include <ESPAsyncWebServer.h>
  #include <OneWire.h>
  #include <DallasTemperature.h>
  #include "DFRobot_ESP_PH.h"
  #include "EEPROM.h"
  #define ONE_WIRE_BUS 4                        // Data wire is connected to GPIO 4

  OneWire oneWire(ONE_WIRE_BUS);
  DFRobot_ESP_PH ph;
  // Pass our oneWire reference to Dallas Temperature sensor 
  DallasTemperature sensors(&oneWire);
  WiFiClient client;
  const int httpPort = 80;

  #define ESPADC 4096.0   //the esp Analog Digital Convertion value
  #define ESPVOLTAGE 3300 //the esp voltage supply value
  #define PH_PIN 35  //the esp gpio data pin number
  
  float voltage;
  float Celcius=0;
  float Turbidityval;
  float phValue;
  float tdsValue = 0;
  float ntu;

// Replace with your network credentials
const char* ssid = "Ahsan";
const char* password = "ahsan2211";
const char* host = "192.168.0.102";


void setup(){
  // Serial port for debugging purposes
  Serial.begin(115200);
  Serial.println();
  sensors.begin();
  EEPROM.begin(32);//needed to permit storage of calibration value in eeprom
  ph.begin();
  //    gravityTds.setPin(TdsSensorPin);
  //    gravityTds.setAref(3.3);                            //reference voltage on ADC, default 5.0V on Arduino UNO
  //    gravityTds.setAdcRange(1024);                       //1024 for 10bit ADC;4096 for 12bit ADC
  //    gravityTds.begin();                                 //initialization    

  WiFi.begin(ssid, password);
  Serial.println("Connecting to WiFi");
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println();
  // Print ESP Local IP Address
  Serial.println(WiFi.localIP());


}
 
void loop(){

    float waterTemperature= getTemperature();
    float phValue=  getPHvalue(waterTemperature);
    float turbidityValue = geTurbidity();
//  float TDSValue=getTDS();
  

    Serial.print("connecting to ");
    Serial.println(host);
    if (!client.connect(host, httpPort)) {
        Serial.println("connection failed");
        return;
    }

      // This will send the request to the server
      client.print(String("GET http://localhost/smart_water/connect.php?") + 
                         ("&waterTemperature=") + waterTemperature         +
                         ("&phValue=") + phValue + 
                         ("&turbidityValue=") + turbidityValue + " HTTP/1.1\r\n"  +
                          "Host: " + host + "\r\n" +
                          "Connection: close\r\n\r\n");
    unsigned long timeout = millis();
    while (client.available() == 0) {
        if (millis() - timeout > 3000) {
            Serial.println(">>> Client Timeout !");
            client.stop();
            return;
        }
    }

    // Read all the lines of the reply from server and print them to Serial
    while(client.available()) {
        String line = client.readStringUntil('\r');
        Serial.print(line);
        
    }

    Serial.println();
    Serial.println("closing connection");
  
}
////////////////////////////////////////////////////TEMPERATURE FUNCTION//////////////////////////////////////////////////////////////
float getTemperature()
{ 
  sensors.requestTemperatures(); 
  Celcius=sensors.getTempCByIndex(0);
  Serial.print(Celcius);
  return Celcius;
}

/////////////////////////////////////////////////////PH Function///////////////////////////////////
float getPHvalue(float temperature)
{
static unsigned long timepoint = millis();
  if (millis() - timepoint > 1000U) //time interval: 1s
  {
    timepoint = millis();
    //voltage = rawPinValue / esp32ADC * esp32Vin
    voltage = analogRead(PH_PIN) / ESPADC * ESPVOLTAGE; // read the voltage
    Serial.print("voltage:");
    Serial.println(voltage, 4);

    phValue = ph.readPH(voltage, temperature); // convert voltage to pH with temperature compensation
    Serial.print("pH:");
    Serial.println(phValue, 4);
  }
  ph.calibration(voltage, temperature); // calibration process by Serail CMD


  
  if(phValue >= 7.30){
    Serial.print("PH VALUE: ");
    Serial.println(phValue); 
    Serial.println("Water Alkalinity high");
    delay(3000);
   }

  if(phValue >= 6.90 && phValue <= 7.19){
   
    Serial.print("PH VALUE: ");
    Serial.println(phValue); 
    Serial.println("Water Is  neutral (safe)");
  }

  if(phValue < 6.89){
   
    Serial.print("PH VALUE: ");
    Serial.println(phValue); 
    Serial.println("Water Acidity High");
   }
   return phValue;

  
}

////////////////////////////////////////////////////Turbidity FUNCTION//////////////////////////////////////////////////////////////

float geTurbidity() {

   Serial.println("Taking Readings from turbidity Sensor");
     int trbvolt = analogRead(34);
     Turbidityval = map(trbvolt, 0, 2800, 5, 1); 
     String Tval  = (String)turbidity;
     Serial.println(trbvolt);

//    Turbidityval=analogRead(TurbidityPin)/1024.0*5.0;
//    ntu = -1120.4*square(voltage)+5742.3*voltage-4352.9;
//   Serial.print("    Trubidity value: ");
//   Serial.println( Turbidityval);//


  if( Turbidityval ==1){
    
    Serial.print("Turbidity Level: ");
    Serial.print(Tval); 
    Serial.println("NTU");
    Serial.println("Water Very Clean ");
  }

  if( Turbidityval == 2  ){
   
    Serial.print("Turbidity Level: ");
    Serial.print(Tval); 
    Serial.println("NTU");
    Serial.println("Water Normal Clean ");
  }
   if( Turbidityval == 3  ){
   
    Serial.print("Turbidity Level: ");
    Serial.print(Tval); 
    Serial.println("NTU");
    Serial.println("Water is a bit Dirty ");
  }

  if( Turbidityval ==4  || Turbidityval ==5 ){
    
    Serial.print("Turbidity Level: ");
    Serial.print(Tval); 
    Serial.println("NTU");
    Serial.println("Water Very Dirty ");
   }
 return Turbidityval;
}
////////////////////////////////////////////////////TDS FUNCTION//////////////////////////////////////////////////////////////
float getTDS()
{
//    sensors.requestTemperatures();
//    gravityTds.setTemperature(sensors.getTempCByIndex(0));  // set the temperature and execute temperature compensation
//    gravityTds.update();  //sample and calculate
//    tdsValue = gravityTds.getTdsValue();  // then get the value
//    delay(5000);
//    return tdsValue;
    
}













///////////////////////////////////////////webserver code start/////////////////////////////////////

//  // Route for root / web page
//  server.on("/", HTTP_GET, [](AsyncWebServerRequest *request){
//    request->send_P(200, "text/html", index_html, processor);
//  });
//  server.on("/temperaturec", HTTP_GET, [](AsyncWebServerRequest *request){
//    request->send_P(200, "text/plain", readDSTemperatureC().c_str());
//  });
//  // Start server
//  server.begin();
//
//// Create AsyncWebServer object on port 80
//AsyncWebServer server(80);
//
//String readDSTemperatureC() {
//  // Call sensors.requestTemperatures() to issue a global temperature and Requests to all devices on the bus
//  sensors.requestTemperatures(); 
//  float tempC = sensors.getTempCByIndex(0);
//
//  if(tempC == -127.00) {
//    Serial.println("Failed to read from DS18B20 sensor");
//    return "--";
//  } else {
//    Serial.print("Temperature Celsius: ");
//    Serial.println(tempC); 
//  }
//  return String(tempC);
//}
//
//const char index_html[] PROGMEM = R"rawliteral(
//<!DOCTYPE HTML><html>
//<head>
//  <meta name="viewport" content="width=device-width, initial-scale=1">
//  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
//  <style>
//    html {
//     font-family: Arial;
//     display: inline-block;
//     margin: 0px auto;
//     text-align: center;
//    }
//    h2 { font-size: 3.0rem; }
//    p { font-size: 3.0rem; }
//    .units { font-size: 1.2rem; }
//    .ds-labels{
//      font-size: 1.5rem;
//      vertical-align:middle;
//      padding-bottom: 15px;
//    }
//  </style>
//</head>
//<body>
//  <h2>Real-Time Smart Water Web_Server</h2>
//  <p>
//    <i class="fas fa-thermometer-half" style="color:#059e8a;"></i> 
//    <span class="ds-labels">Water Temperature </span> 
//    <span id="temperaturec">%TEMPERATUREC%</span>
//    <sup class="units">&deg;C</sup>
//  </p>
//</body>
//<script>
//setInterval(function ( ) {
//  var xhttp = new XMLHttpRequest();
//  xhttp.onreadystatechange = function() {
//    if (this.readyState == 4 && this.status == 200) {
//      document.getElementById("temperaturec").innerHTML = this.responseText;
//    }
//  };
//  xhttp.open("GET", "/temperaturec", true);
//  xhttp.send();
//}, 3000) ;
//
//</script>
//</html>)rawliteral";
//
//// Replaces placeholder with  values
//String processor(const String& var){
//  //Serial.println(var);
//  if(var == "TEMPERATUREC"){
//    return readDSTemperatureC();
//  return String();
//  }
//}
/////////////////////////////////webserver code end/////////////////////////////////////////////
