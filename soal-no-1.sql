SELECT 
cst.Code_Cust, 
cst.Cust_Name, 
fwd.Fwd_Name, 
cst.Order_Type, 
cst.Join_Date
FROM 
Customer AS cst
JOIN 
Forwarder as fwd ON fwd.Code_Cust = cst.Code_Cust
WHERE 
cst.Join_Date BETWEEN '2019-10-01' AND '2020-01-02'