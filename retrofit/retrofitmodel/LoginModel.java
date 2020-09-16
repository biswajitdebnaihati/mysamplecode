package com.test.retrofitmodel;

import com.google.gson.annotations.SerializedName;

import java.util.Map;

public class LoginModel {
    @SerializedName("message")
    public String message;
    @SerializedName("status")
    public boolean status;
    @SerializedName("data")
   /* public UserModel getUserDetails = null;
    @SerializedName("data")*/
    public Map<String, String> parameters;

  /*  public UserModel getUserDetails() {
        return getUserDetails;
    }*/

    public String getMessage() {
        return message;
    }

    public boolean isStatus() {
        return status;
    }
}
