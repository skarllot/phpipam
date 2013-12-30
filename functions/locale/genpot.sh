#!/bin/sh

TMP_FILE="./list-$$.txt"

FIND_PATH=./
DEST_PATH=./functions/locale
if [ $(echo $PWD | grep "locale" | wc -l) -eq 1 ]; then
  FIND_PATH=../../
  DEST_PATH=.
fi

find $FIND_PATH -type f -name \*.php > $TMP_FILE
xgettext -L PHP --from-code utf-8 -d phpipam -o $DEST_PATH/phpipam.pot -f $TMP_FILE

rm -f $TMP_FILE
