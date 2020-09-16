package com.wishster.mydatabasecheck;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

import androidx.annotation.Nullable;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;

class Mydb extends SQLiteOpenHelper {
    String database_name;
    public Mydb(@Nullable Context context, @Nullable String name, @Nullable SQLiteDatabase.CursorFactory factory, int version) {
        super(context, name, null, version);
        this.database_name=name;

    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        //String q="CREATE TABLE TABLE_CONTACTS(KEY_ID INTEGER PRIMARY KEY,KEY_NAME TEXT,KEY_PH_NO TEXT)";
        db.execSQL(SettingDb.Query);
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL(SettingDb.DropTableName);
        onCreate(db);
    }
    Long addData(final String TableName,final JSONObject jsonObject2) throws JSONException {
        SQLiteDatabase db = this.getWritableDatabase();
        ContentValues values = new ContentValues();
        Iterator<String> iter = jsonObject2.keys();
        while(iter.hasNext()) {
            String key = iter.next();
            Log.d("ppdata",key+" "+jsonObject2.get(key));
            values.put(key, jsonObject2.get(key).toString());
        }
       // values.put("KEY_NAME", "hello");
        //values.put("KEY_PH_NO", "123");
        Log.d("ppdata"," Table Name "+TableName);
        Long l=db.insert(TableName, null, values);
        return l;
    }
    int updateData(final String TableName,final JSONObject jsonObject2) throws JSONException {
        SQLiteDatabase db = this.getWritableDatabase();
        ContentValues values = new ContentValues();
        Iterator<String> iter = jsonObject2.keys();
        while(iter.hasNext()) {
            String key = iter.next();
            Log.d("ppdata",key+" "+jsonObject2.get(key));
            values.put(key, jsonObject2.get(key).toString());
        }
       // values.put("KEY_NAME", "hello");
        //values.put("KEY_PH_NO", "123");
        Log.d("ppdata"," Table Name "+TableName);
        int l=db.update(TableName,  values,"id=1 and name='Biswajit'",null);
        return l;
        /*
        String strSQL = "UPDATE myTable SET Column1 = someValue WHERE columnId = "+ someValue;

        myDataBase.execSQL(strSQL);
         */
    }

    public int geTotalItemCount(final String TableName) {
        String countQuery = "SELECT  * FROM " + TableName;
        SQLiteDatabase db = this.getReadableDatabase();
        Cursor cursor = db.rawQuery(countQuery, null);
        int count=cursor.getCount();
        cursor.close();

        // return count
        return count;
    }
     public int getLastId(final String TableName,String orderbycoluml) {
         String selectQuery = "SELECT  * FROM " + TableName;
         SQLiteDatabase db = this.getReadableDatabase();
         Cursor cursor = db.rawQuery(selectQuery, null);
         cursor.moveToLast();
         return Integer.parseInt(cursor.getString(0));
    }
    public Cursor getAllRow(final String TableName,String orderbycoluml) {

         String selectQuery = "SELECT  * FROM " + TableName;
         SQLiteDatabase db = this.getReadableDatabase();
         Cursor cursor = db.rawQuery(selectQuery, null);
        return cursor;
    }


}
