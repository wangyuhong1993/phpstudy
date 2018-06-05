<?php
	// 单例工厂类:
	// 通过这个工厂类，可以传递过来一个模型类的类名
	// 并返回给类的一个实例(对象),而且,保证其为"单例的"
	class ModelFactory{
		Static $all_model = array();
		Static function M($model_name){ //一个模型类的类名
			if( !isset($all_model[$model_name]) ||!(static::$all_model instanceof $model_name)){  // 还没有这个
				// static可替代self
				static::$all_model[$model_name] = new $model_name(); 
			}
			return static::$all_model[$model_name];
		}
	}

?>