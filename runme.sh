#!/bin/bash
mkdir -p ~/amar

javac -d /home/my/amar HelloWorld.java WOIR.java
java -cp /home/my/amar:. in.woir.http.HelloWorld
