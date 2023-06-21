#include "DHT.h"

#define DHTPIN 5
#define DHTTYPE DHT11

DHT dht (DHTPIN, DHTTYPE);

void setup()
{
    Serial.begin(9600);
    dht.begin();
}

void loop()
{
    float temperature = dht.readTemperature();
    int humidity = dht.readHumidity();

    Serial.println("suhu : " + String(temperature));
    Serial.println("Kelembaban : " + String(humidity));
    delay(1000);
}