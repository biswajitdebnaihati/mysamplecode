package com.wishster.mydatabasecheck;

import androidx.appcompat.app.AppCompatActivity;

import android.database.Cursor;
import android.os.Bundle;
import android.util.Log;

import org.json.JSONException;
import org.json.JSONObject;

public class MainActivity2 extends AppCompatActivity {
    SettingDb settingDb=new SettingDb();
    JSONObject jsonObject2=new JSONObject();
    static  JSONObject jsonObject=new JSONObject();
    String TableName="myTable";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        try {
            jsonObject.put("id","auto");
            jsonObject.put("name","TEXT");
            jsonObject.put("address","TEXT");
        } catch (JSONException e) {
            e.printStackTrace();
        }

        settingDb.createTable(TableName,jsonObject);
        Mydb mydb=new Mydb(MainActivity2.this,"mydb",null,4);
        try {

            jsonObject2.put("name","Biswajit");
            jsonObject2.put("address","Naihati");
        } catch (JSONException e) {
            e.printStackTrace();
        }

        try {
            Log.d("testdata",""+mydb.addData(TableName,jsonObject2));
        } catch (JSONException e) {
            e.printStackTrace();
        }

            Log.d("testdata","Total Item "+mydb.geTotalItemCount(TableName));
            Log.d("testdata","Last Item "+mydb.getLastId(TableName,"id"));
            Log.d("testdata","Cursor "+mydb.getLastId(TableName,"id"));
            Cursor cur=null;
            if (mydb.geTotalItemCount(TableName)>0)
                cur = mydb.getAllRow(TableName,"id");


        if (cur.moveToFirst()){
            while(cur.moveToNext()){
                Log.d("testdata","All Ityems "+cur.getString(cur.getColumnIndex("name")));

            }
        }


        try {
            Log.d("testdata","UPDATE : "+mydb.updateData(TableName,jsonObject2));
        } catch (JSONException e) {
            e.printStackTrace();
        }

    }
}