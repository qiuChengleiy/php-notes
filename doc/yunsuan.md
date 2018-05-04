### 运算符

* 算数运算符
  * x+y  加
  * x-y 减
  * x*y 乘
  * x/y 除
  * x%y 模（除法的余数）
  * -x 取反
  * a.b 并置(拼接字符串)
  
* 赋值运算符
  * x=y 左操作数被设置为右侧表达式的值
  * x+=y   相当于 x = x + y
  * x-=y    ....
  * x*=y    ....
  * x/=y    ....
  * x%=y    ....
  * a.=b    ....
  
* 递增/递减
  * ++x     x 加 1，然后返回 x
  * x++     返回 x，然后 x 加 1
  * --x     反之
  * x--     反之

* 比较运算符
  * x==y  如果 x 等于 y，则返回 true 
  * x===y   如果 x 等于 y，且它们类型相同，则返回 true 
  * x!=y    如果 x 不等于 y，则返回 true
  * x<>y    如果 x 不等于 y，则返回 true 
  * x!==y   如果 x 不等于 y，或它们类型不相同，则返回 true 
  * x>y     如果 x 大于 y，则返回 true
  * x<y     如果 x 小于 y，则返回 true
  * x>=y    如果 x 大于或者等于 y，则返回 true
  * x<=y    如果 x 小于或者等于 y，则返回 true
  
* 逻辑运算符
  *   * x and y 如果 x 和 y 都为 true，则返回 true
  * x or y  如果 x 和 y 至少有一个为 true，则返回 true
  * x xor y 如果 x 和 y 有且仅有一个为 true，则返回 true
  * x && y  如果 x 和 y 都为 true，则返回 true
  * x || y  如果 x 和 y 至少有一个为 true，则返回 true
  * !x      如果 x 不为 true，则返回 true
  
* 数组运算符
  * x + y      x 和 y 的集合
  * x == y     如果 x 和 y 具有相同的键/值对，则返回 true
  * x === y    如果 x 和 y 具有相同的键/值对，且顺序相同类型相同，则返回 true
  * x != y     如果 x 不等于 y，则返回 true
  * x <> y     如果 x 不等于 y，则返回 true
  * x !== y    如果 x 不等于 y，则返回 true

* 三元运算符
  * (expr1) ? (expr2) : (expr3) 
  
表达式 expr1 ?: expr3 在 expr1 求值为 TRUE 时返回 expr1，否则返回 expr3。

* 我们通过括号的配对来明确标明运算顺序，而非靠运算符优先级和结合性来决定，通常能够增加代码的可读性。













