#!/bin/bash

//curl wpcicd.squareops.co.in
RESPONSE="$(curl wpcicd.squareops.co.in)"
if [[ "$RESPONSE" == *"200"* ]]; then echo "App running"; else echo "Not running";
fi
