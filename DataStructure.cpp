#include<iostream>
#include <stdlib.h>
#define size 10
using namespace std;
class sTack{
private:
	int top;
	int arr[size];
public:
	sTack(){
		top = -1;
	}
	void push(int data){
		if (top > 9){
			cout << "\a\a\a stack is Full \n";
			exit(0);
		}
		arr[++top] = data;
	}
	int pop(){
		if (top < 0)
		{
			cout << "\a\a\aStack is empty \n";
			exit(0);
		}
		return arr[top--];
	}
	void display(){
		for (int i = top; i <= 0; i--)
			cout << arr[i] << "\t";
	}
	int sizeOfStack(){
		return top + 1;
	}
};
class singelLinkedList{
private:
	struct node{
		node *next;
		int datd;
	};
	node *first;
	int count;
public:
	singelLinkedList(){
		first = NULL;
		count++;
	}
	void addFirst(int data){
		count++;
		if (count == 10)
		{
			cout << "you can't add more than 10 element \n";
			exit(0);
		}
		node *newnode = new node();
		newnode->datd = data;
		newnode->next = first;
		first = newnode;
	}
	void addLast(int data){
		count++;
		if (count == 10)
		{
			cout << "you can't add more than 10 element \n";
			exit(0);
		}
		node *newnode = new node();
		newnode->datd = data;
		node *temp = first;
		while (temp->next != NULL)
			temp = temp->next;
		newnode->next = NULL;
		temp->next = newnode;
	}
	void display(){
		node *temp = first;
		while (temp != NULL){
			cout << temp->datd << "\t";
			temp = temp->next;
		}
	}
	int getSize(){
		return count;
	}
	void reverseByStack(){
		node *temp = first;
		sTack zayed;
		while (temp != NULL)
		{
			zayed.push(temp->datd);
			temp = temp->next;
		}
		temp = first;
		while (temp != NULL){
			temp->datd = zayed.pop();
			temp = temp->next;
		}
		cout << "\n\n\nDisplay elments after reverse it By Stack \n\n\n";
		temp = first;
		while (temp != NULL){
			cout << temp->datd << "\t";
			temp = temp->next;
		}
	}
};
//////////////////////////////////////doubly linked list----------------
class doublyLinkedList {
private:
	struct Node {
		int item;
		Node* next;
		Node* prev;
	};
	Node* first;
	Node* last;
	int count;

public:
	doublyLinkedList() {
		first = NULL;
		last = NULL;
		count = 0;
	}
	bool isEmpty()
	{
		return (first == NULL);
	}
	void destroy()
	{
		Node *temp;
		while (first != NULL)
		{
			temp = first;
			first = first->next;
			delete temp;
		}
		last = NULL;
		count = 0;
	}

	void insertLast(int val) {
		Node* newNode = new Node;
		newNode->item = val;
		if (count == 0) {
			first = last = newNode;
			newNode->next = newNode->prev = NULL;
		}
		else {
			newNode->next = NULL;
			newNode->prev = last;
			last->next = newNode;
			last = newNode;



		}
		count++;
	}



	void insertFirst(int item)
	{
		Node*newNode = new Node;
		newNode->item = item;
		if (count == 0) {
			first = last = newNode;
			newNode->next = newNode->prev = NULL;
		}
		else {
			newNode->next = first;
			newNode->prev = NULL;
			first->prev = newNode;
			first = newNode;

		}
		count++;
	}
	void insertAt(int pos, int item)
	{
		if (pos < 0 || pos > count)
			cout << "Out Of Range ...!" << endl;
		else
		{
			Node *newNode = new Node;
			newNode->item = item;
			if (pos == 0)
				insertFirst(item);
			else if (pos == count)
				insertLast(item);
			else
			{
				Node *current = first;
				for (int i = 1; i < pos; i++)
				{
					current = current->next;
				}

				newNode->next = current->next;
				newNode->prev = current;
				current->next->prev = newNode;
				current->next = newNode;
				count++;
			}

		}
	}


	void removeFirst()
	{
		if (count == 0)
			cout << "Empty List" << endl;
		else if (count == 1)//first == last
		{
			delete first;
			last = first = NULL;
		}
		else
		{
			Node* current = first;
			first = first->next;
			first->prev = NULL;
			delete current;

		}
		count--;
	}

	void deleteNthNode(int pos)
	{
		if (pos < 0 || pos >= count) {
			cout << "Out Of Range" << endl;
			return;
		}
		else if (pos == 0)
		{
			removeFirst();
		}
		else if (pos == count - 1)
		{
			removeLast();
		}
		else {
			Node *current = first->next;


			for (int i = 1; i < pos; i++)
			{
				current = current->next;
			}
			current->prev->next = current->next;
			current->next->prev = current->prev;
			delete current;
		}
		count--;
	}
	void removeLast()
	{
		if (count == 0)
			cout << "Empty List" << endl;
		else if (count == 1)
		{
			delete first;

			last = first = NULL;
			count--;
		}
		else
		{
			Node *current = last;
			last = last->prev;
			last->next = NULL;
			delete current;
			count--;
		}
	}



	void remove(int item)
	{
		if (isEmpty())
		{
			cout << "Empty List Can't Remove ";
			return;
		}
		Node*current = first->next;

		if (first->item == item)
		{
			removeFirst();
			return;
		}
		else
		{
			while (current != NULL)
			{
				if (current->item == item)
					break;
				current = current->next;
			}

			if (current == NULL) {
				cout << "The item is not there\n";
				return;
			}
			else if (current->next == NULL) {
				removeLast();
				return;
			}

			else
			{
				current->prev->next = current->next;
				//if (current->next != NULL)
				current->next->prev = current->prev;
				delete current;
				count--;
			}

		}
	}
	void display() {
		if (isEmpty())
		{
			cout << "Empty List Can't Display...!";
		}
		else {
			Node* temp = first;
			while (temp != nullptr) {
				cout << temp->item << " ";
				temp = temp->next;
			}
		}
		cout << endl;
	}
	void reverse_display() {
		if (isEmpty())
		{
			cout << "Empty List Can't Display Reverse...!";
		}
		else
		{
			Node* temp = last;
			while (temp != NULL) {
				cout << temp->item << " ";
				temp = temp->prev;
			}
		}
	}
	void reverseByStackindoubley1(){
		Node *temp = first;
		sTack s1;
		while (temp != NULL)
		{
			s1.push(temp->item);
			temp = temp->next;
		}
		temp = first;
		while (temp != NULL){
			temp->item = s1.pop();
			temp = temp->next;
		}
		cout << "\n\n\nDisplay elments after reverse it By Stack \n\n\n";
		temp = first;
		while (temp != NULL){
			cout << temp->item << "\t";
			temp = temp->next;
		}
	}
	void reverseByStackindoubley2(){
		Node *temp = last;
		sTack s1;
		while (temp != NULL)
		{
			s1.push(temp->item);
			temp = temp->prev;
		}
		temp = last;
		while (temp != NULL){
			temp->item = s1.pop();
			temp = temp->prev;
		}
		cout << "\n\n\nDisplay elments after reverse it By Stack \n\n\n";
		temp = last;
		while (temp != NULL){
			cout << temp->item << "\t";
			temp = temp->prev;
		}
	}
};

int main(){
	singelLinkedList li;
	li.addFirst(50);
	li.addFirst(40);
	li.addFirst(30);
	li.addFirst(20);
	li.addFirst(10);
	li.addLast(60);
	li.display();
	cout << " \n\n\n\nStack\n\n\n\n";
	sTack s1;
	s1.push(1);
	s1.push(2);
	s1.push(3);
	s1.push(4);
	s1.push(5);
	s1.display();
	cout << "\nthe size of Stack is " << s1.sizeOfStack() << endl;
	cout << "*\nafter call POP\n*** \n";
	s1.pop();
	s1.display();
	cout << "\nthe size of Stack is " << s1.sizeOfStack() << endl;
	/* End test Code */
	cout << "\nreverse Linked List \n";
	li.reverseByStack();
	cout << "\n\n\n\nbefore reverse doubly linked List \n\n\n\n\n";
	doublyLinkedList dll;
	dll.insertFirst(1);
	dll.insertFirst(2);
	dll.insertFirst(3);
	dll.insertFirst(4);
	dll.insertFirst(5);
	dll.display();
	cout << "\n\n\n\nreverse doubly linked List \n\n\n\n\n";
	dll.reverseByStackindoubley1();



	system("pause");
}