package cat;
import java.io.*;

public class Rectangle {
	float width,length,Area;
	String color;
	void set_width(float a)
	{
		width=a;
	}
	void set_colour(String c){
		color=c;
	}
	void set_length(float b){
		length=b;
	}
	void find_area(){
		double area;
		area=length*width;
		System.out.println("Area is :"+area);
	}
	static void compare(Rectangle r1,Rectangle r2){
		if((r1.color).equals(r2.color)&&(r1.length==r2.length)){
			System.out.println("Matcing Rectangles");
		}else{
			System.out.println("Non matching Rectangles");
		}
	}
	public static void main(){
		float width,length;
		String color;
		BufferedReader a =new BufferedReader(new InputStreamReader(System.in));
		System.out.println("Enter object 1 values");
		Rectangle obj1=new Rectangle();
	}
}
