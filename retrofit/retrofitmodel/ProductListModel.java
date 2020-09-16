package com.test.retrofitmodel;

import com.google.gson.annotations.SerializedName;

public class ProductListModel {
    @SerializedName("message")
    public String message;
    @SerializedName("status")
    public boolean status;
    @SerializedName("data")
    public UserModel getUserDetails = null;



    public UserModel getUserDetails() {
        return getUserDetails;
    }

    public String getMessage() {
        return message;
    }

    public boolean isStatus() {
        return status;
    }

}
